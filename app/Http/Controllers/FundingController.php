<?php

namespace App\Http\Controllers;

use App\Models\Funding;
// use App\Http\Requests\StoreFundingRequest;
// use App\Http\Requests\UpdateFundingRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class FundingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:funding-view'])->only(['index', 'show', 'datatable']);
        $this->middleware(['permission:funding-create'])->only(['create', 'store']);
        $this->middleware(['permission:funding-update'])->only(['edit', 'update']);
        $this->middleware(['permission:funding-delete'])->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.funding.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.funding.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFundingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate_request($request);
        $request->validate([
            'attachment_pdf' => 'required|file|max:5048|mimes:pdf',
            'attachment_img' => 'required|file|max:2048|mimes:jpeg,jpg,png,webp'
        ], [
            'attachment_pdf.mimes' => 'Berkas harus berupa file pdf.',
            'attachment_pdf.max' => 'Berkas tidak boleh lebih besar dari 5 MB',
            'attachment_img.mimes' => 'Dokumentasi harus berupa file jpeg/jpg/png/webp.',
            'attachment_img.max' => 'Dokumentasi tidak boleh lebih besar dari 2 MB',
        ]);

        $slug = Str::slug($request->input('title') . '-' . time());

        $attachPdf = $request->file('attachment_pdf');
        $pdfName = $slug . '.' . $attachPdf->getClientOriginalExtension();
        Storage::putFileAs('public/funding', $attachPdf, $pdfName);

        $attachImg = $request->file('attachment_img');
        $imgName = $slug . '.' . $attachImg->getClientOriginalExtension();
        Storage::putFileAs('public/funding', $attachImg, $imgName);

        Funding::create([
            'title' => $request->input('title'),
            'date_activity' => $request->input('date_activity'),
            'description' => $request->input('description'),
            'attachment_pdf' => $pdfName,
            'attachment_img' => $imgName,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('funding.create')->with('success', 'Data pendanaan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funding  $funding
     * @return \Illuminate\Http\Response
     */
    public function show(Funding $funding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Funding  $funding
     * @return \Illuminate\Http\Response
     */
    public function edit(Funding $funding)
    {
        //Check Active User //
        $activeUser = Auth::user();
        if ($funding->user_id == $activeUser->id || $activeUser->hasRole('administrator')) {
            return view('dashboard.funding.edit', compact('funding'));
        } else {
            return redirect()->route('funding.index')->with('warning', 'Anda tidak dapat mengubah data milik pengguna lain.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFundingRequest  $request
     * @param  \App\Models\Funding  $funding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funding $funding)
    {
        $this->validate_request($request);

        $slug = Str::slug($request->input('title') . '-' . time());

        if ($request->hasFile('attachment_pdf')) {
            $request->validate([
                'attachment_pdf' => 'required|file|max:5048|mimes:pdf'
            ], [
                'attachment_pdf.mimes' => 'Berkas harus berupa file pdf.',
                'attachment_pdf.max' => 'Berkas tidak boleh lebih besar dari 5 MB',
            ]);

            if (Storage::exists('public/funding/' . $funding->attachment_pdf)) {
                Storage::delete('public/funding/' . $funding->attachment_pdf);
            }

            $attachPdf = $request->file('attachment_pdf');
            $pdfName = $slug . '.' . $attachPdf->getClientOriginalExtension();
            Storage::putFileAs('public/funding', $attachPdf, $pdfName);

            $funding->attachment_pdf = $pdfName;
        } else {
            $pdfName = $slug . '.pdf';
            Storage::move('public/funding/' . $funding->attachment_pdf, 'public/funding/' . $pdfName);
            $funding->attachment_pdf = $pdfName;
        }

        if ($request->hasFile('attachment_img')) {
            $request->validate([
                'attachment_img' => 'required|file|max:2048|mimes:jpeg,jpg,png,webp'
            ], [
                'attachment_img.mimes' => 'Dokumentasi harus berupa file jpeg/jpg/png/webp.',
                'attachment_img.max' => 'Dokumentasi tidak boleh lebih besar dari 2 MB',
            ]);

            if (Storage::exists('public/funding/' . $funding->attachment_img)) {
                Storage::delete('public/funding/' . $funding->attachment_img);
            }

            $attachImg = $request->file('attachment_img');
            $imgName = $slug . '.' . $attachImg->getClientOriginalExtension();
            Storage::putFileAs('public/funding', $attachImg, $imgName);

            $funding->attachment_img = $imgName;
        } else {
            $extension = Str::substr($funding->attachment_img, strpos($funding->attachment_img, ".") + 1, 4);
            $imgName = $slug . '.' . $extension;
            Storage::move('public/funding/' . $funding->attachment_img, 'public/funding/' . $imgName);
            $funding->attachment_img = $imgName;
        }

        $funding->title = $request->input('title');
        $funding->date_activity = $request->input('date_activity');
        $funding->description = $request->input('description');
        $funding->save();

        return redirect()->route('funding.edit', $funding->id)->with('success', 'Data pendanaan telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funding  $funding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funding $funding)
    {
        Session::flash('success', 'Data Pendanaan ' . $funding->title . ' telah dihapus.');

        if (Storage::exists('public/funding/' . $funding->attachment_pdf)) {
            Storage::delete('public/funding/' . $funding->attachment_pdf);
        }

        if (Storage::exists('public/funding/' . $funding->attachment_img)) {
            Storage::delete('public/funding/' . $funding->attachment_img);
        }

        $funding->delete();
    }

    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $fundings = Funding::with('user')->get();

            return DataTables::of($fundings)
                ->editColumn('date_activity', function ($funding) {
                    $date_activity = Carbon::parse($funding->date_activity)->locale('id');
                    $date_activity->settings(['formatFunction' => 'translatedFormat']);
                    return $date_activity->format('l, j F Y');
                })
                ->addColumn('attachment', function ($funding) {
                    return view('dashboard.funding.attachment', compact('funding'))->render();
                })
                ->addColumn('action', function ($funding) {
                    return view('dashboard.funding.action', compact('funding'))->render();
                })
                ->rawColumns(['attachment', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
    }

    /**
     * Validate request
     */
    public function validate_request($request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date_activity' => 'required|date',
            'description' => 'required|string',
            'user_id' => 'numeric'
        ]);
    }
}
