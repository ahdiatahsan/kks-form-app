<?php

namespace App\Http\Controllers;

use App\Models\InstitutionalKks;
use App\Models\Setting;
// use App\Http\Requests\StoreInstitutionalKksRequest;
// use App\Http\Requests\UpdateInstitutionalKksRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class InstitutionalKksController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:kks-view'])->only(['index', 'show', 'datatable']);
        $this->middleware(['permission:kks-create'])->only(['create', 'store']);
        $this->middleware(['permission:kks-update'])->only(['edit', 'update']);
        $this->middleware(['permission:kks-delete'])->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.institutional.kks.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Check data exist //
        // $dataExist = InstitutionalKks::select('id')->with('user')->where('user_id', '=', Auth::user()->id)->first();
        // if ($dataExist != null) {
        //     return redirect()->route('institutionalKks.index')->with('warning', 'Anda telah memiliki data di Kelembagaan Forum Kabupaten. 
        //     Ubah atau hapus data lama untuk dapat menambahkan data baru');
        // }

        return view('dashboard.institutional.kks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInstitutionalKksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate_request($request);
        $request->validate([
            'attachment_pdf' => 'required|file|max:5048|mimes:pdf',
            'attachment_img' => 'file|max:2048|mimes:jpeg,jpg,png,webp'
        ], [
            'attachment_pdf.mimes' => 'Berkas harus berupa file pdf.',
            'attachment_pdf.max' => 'Berkas tidak boleh lebih besar dari 5 MB',
            'attachment_img.mimes' => 'Dokumentasi harus berupa file jpeg/jpg/png/webp.',
            'attachment_img.max' => 'Dokumentasi tidak boleh lebih besar dari 2 MB',
        ]);

        $slug = Str::slug($request->input('title') . '-' . time());

        $attachPdf = $request->file('attachment_pdf');
        $pdfName = $slug . '.' . $attachPdf->getClientOriginalExtension();
        Storage::putFileAs('public/institutionalKks', $attachPdf, $pdfName);

        if ($request->hasFile('attachment_img')) {
            $attachImg = $request->file('attachment_img');
            $imgName = $slug . '.' . $attachImg->getClientOriginalExtension();
            Storage::putFileAs('public/institutionalKks', $attachImg, $imgName);
        } else {
            $imgName = null;
        }

        InstitutionalKks::create([
            'title' => $request->input('title'),
            'attachment_pdf' => $pdfName,
            'attachment_img' => $imgName,
            'user_id' => Auth::user()->id,
            'setting_id' => $request->input('period')
        ]);

        return redirect()->route('institutionalKks.index')->with('success', 'Data Kelembagaan Forum Kabupaten berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InstitutionalKks  $institutionalKks
     * @return \Illuminate\Http\Response
     */
    public function show(InstitutionalKks $institutionalKks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InstitutionalKks  $institutionalKks
     * @return \Illuminate\Http\Response
     */
    public function edit(InstitutionalKks $institutionalKks)
    {
        return view('dashboard.institutional.kks.edit', compact('institutionalKks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInstitutionalKksRequest  $request
     * @param  \App\Models\InstitutionalKks  $institutionalKks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstitutionalKks $institutionalKks)
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

            if (Storage::exists('public/institutionalKks/' . $institutionalKks->attachment_pdf)) {
                Storage::delete('public/institutionalKks/' . $institutionalKks->attachment_pdf);
            }

            $attachPdf = $request->file('attachment_pdf');
            $pdfName = $slug . '.' . $attachPdf->getClientOriginalExtension();
            Storage::putFileAs('public/institutionalKks', $attachPdf, $pdfName);

            $institutionalKks->attachment_pdf = $pdfName;
        } else {
            $pdfName = $slug . '.pdf';
            Storage::move('public/institutionalKks/' . $institutionalKks->attachment_pdf, 'public/institutionalKks/' . $pdfName);
            $institutionalKks->attachment_pdf = $pdfName;
        }

        if ($request->hasFile('attachment_img')) {
            $request->validate([
                'attachment_img' => 'required|file|max:2048|mimes:jpeg,jpg,png,webp'
            ], [
                'attachment_img.mimes' => 'Dokumentasi harus berupa file jpeg/jpg/png/webp.',
                'attachment_img.max' => 'Dokumentasi tidak boleh lebih besar dari 2 MB',
            ]);

            if (Storage::exists('public/institutionalKks/' . $institutionalKks->attachment_img)) {
                Storage::delete('public/institutionalKks/' . $institutionalKks->attachment_img);
            }

            $attachImg = $request->file('attachment_img');
            $imgName = $slug . '.' . $attachImg->getClientOriginalExtension();
            Storage::putFileAs('public/institutionalKks', $attachImg, $imgName);

            $institutionalKks->attachment_img = $imgName;
        } else {
            if ($institutionalKks->attachment_img == NULL) {
                $institutionalKks->attachment_img = NULL;
            } else {
                $extension = Str::substr($institutionalKks->attachment_img, strpos($institutionalKks->attachment_img, ".") + 1, 4);
                $imgName = $slug . '.' . $extension;
                Storage::move('public/institutionalKks/' . $institutionalKks->attachment_img, 'public/institutionalKks/' . $imgName);
                $institutionalKks->attachment_img = $imgName;
            }
        }

        $institutionalKks->title = $request->input('title');
        $institutionalKks->setting_id = $request->input('period');
        $institutionalKks->save();

        return redirect()->route('institutionalKks.edit', $institutionalKks->id)->with('success', 'Data Kelembagaan Forum Kabupaten telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstitutionalKks  $institutionalKks
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstitutionalKks $institutionalKks)
    {
        Session::flash('success', 'Data Kelembagaan Forum Kabupaten (' . $institutionalKks->title . ') telah dihapus.');

        if (Storage::exists('public/institutionalKks/' . $institutionalKks->attachment_pdf)) {
            Storage::delete('public/institutionalKks/' . $institutionalKks->attachment_pdf);
        }

        if (Storage::exists('public/institutionalKks/' . $institutionalKks->attachment_img)) {
            Storage::delete('public/institutionalKks/' . $institutionalKks->attachment_img);
        }

        $institutionalKks->delete();
    }

    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $institutionalKks = InstitutionalKks::with('user', 'setting')->get();

            return DataTables::of($institutionalKks)
                ->addColumn('attachment', function ($institutionalKks) {
                    return view('dashboard.institutional.kks.attachment', compact('institutionalKks'))->render();
                })
                ->addColumn('action', function ($institutionalKks) {
                    return view('dashboard.institutional.kks.action', compact('institutionalKks'))->render();
                })
                ->rawColumns(['attachment', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
    }

    /**
     * Select2
     */
    public function select2_period(Request $request)
    {
        if ($request->ajax()) {
            $q = $request->input('q');

            $assets = Setting::select('id', 'period')
                ->where('period', 'LIKE', '%' . $q . '%')
                ->get();

            return response()->json($assets, 200);
        }
    }

    /**
     * Validate request
     */
    public function validate_request($request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'user_id' => 'numeric',
            'period' => 'required|numeric'
        ]);
    }
}
