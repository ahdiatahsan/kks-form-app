<?php

namespace App\Http\Controllers;

use App\Models\InstitutionalBuilder;
// use App\Http\Requests\StoreInstitutionalBuilderRequest;
// use App\Http\Requests\UpdateInstitutionalBuilderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class InstitutionalBuilderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.institutional.builder.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Check data exist //
        $dataExist = InstitutionalBuilder::select('id')->with('user')->where('user_id', '=', Auth::user()->id)->first();
        if ($dataExist != null) {
            return redirect()->route('institutionalBuilder.index')->with('warning', 'Anda telah memiliki data di Kelembagaan Tim Pembina. 
            Ubah atau hapus data lama untuk dapat menambahkan data baru');
        }

        return view('dashboard.institutional.builder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInstitutionalBuilderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate_request($request);
        $request->validate([
            'attachment_pdf' => 'required|file|max:3048|mimes:pdf',
            'attachment_img' => 'required|file|max:2048|mimes:jpeg,jpg,png,webp'
        ], [
            'attachment_pdf.mimes' => 'Berkas harus berupa file pdf.',
            'attachment_pdf.max' => 'Berkas tidak boleh lebih besar dari 3 MB',
            'attachment_img.mimes' => 'Dokumentasi harus berupa file jpeg/jpg/png/webp.',
            'attachment_img.max' => 'Dokumentasi tidak boleh lebih besar dari 2 MB',
        ]);

        $slug = Str::slug($request->input('title') . '-' . time());

        $attachPdf = $request->file('attachment_pdf');
        $pdfName = $slug . '.' . $attachPdf->getClientOriginalExtension();
        Storage::putFileAs('public/institutionalBuilder', $attachPdf, $pdfName);

        $attachImg = $request->file('attachment_img');
        $imgName = $slug . '.' . $attachImg->getClientOriginalExtension();
        Storage::putFileAs('public/institutionalBuilder', $attachImg, $imgName);

        InstitutionalBuilder::create([
            'title' => $request->input('title'),
            'attachment_pdf' => $pdfName,
            'attachment_img' => $imgName,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('institutionalBuilder.index')->with('success', 'Data Kelembagaan Tim Pembina berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InstitutionalBuilder  $institutionalBuilder
     * @return \Illuminate\Http\Response
     */
    public function show(InstitutionalBuilder $institutionalBuilder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InstitutionalBuilder  $institutionalBuilder
     * @return \Illuminate\Http\Response
     */
    public function edit(InstitutionalBuilder $institutionalBuilder)
    {
        return view('dashboard.institutional.builder.edit', compact('institutionalBuilder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInstitutionalBuilderRequest  $request
     * @param  \App\Models\InstitutionalBuilder  $institutionalBuilder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstitutionalBuilder $institutionalBuilder)
    {
        $this->validate_request($request);

        $slug = Str::slug($request->input('title') . '-' . time());

        if ($request->hasFile('attachment_pdf')) {
            $request->validate([
                'attachment_pdf' => 'required|file|max:3048|mimes:pdf'
            ], [
                'attachment_pdf.mimes' => 'Berkas harus berupa file pdf.',
                'attachment_pdf.max' => 'Berkas tidak boleh lebih besar dari 3 MB',
            ]);

            if (Storage::exists('public/institutionalBuilder/' . $institutionalBuilder->attachment_pdf)) {
                Storage::delete('public/institutionalBuilder/' . $institutionalBuilder->attachment_pdf);
            }

            $attachPdf = $request->file('attachment_pdf');
            $pdfName = $slug . '.' . $attachPdf->getClientOriginalExtension();
            Storage::putFileAs('public/institutionalBuilder', $attachPdf, $pdfName);

            $institutionalBuilder->attachment_pdf = $pdfName;
        } else {
            $pdfName = $slug . '.pdf';
            Storage::move('public/institutionalBuilder/' . $institutionalBuilder->attachment_pdf, 'public/institutionalBuilder/' . $pdfName);
            $institutionalBuilder->attachment_pdf = $pdfName;
        }

        if ($request->hasFile('attachment_img')) {
            $request->validate([
                'attachment_img' => 'required|file|max:2048|mimes:jpeg,jpg,png,webp'
            ], [
                'attachment_img.mimes' => 'Dokumentasi harus berupa file jpeg/jpg/png/webp.',
                'attachment_img.max' => 'Dokumentasi tidak boleh lebih besar dari 2 MB',
            ]);

            if (Storage::exists('public/institutionalBuilder/' . $institutionalBuilder->attachment_img)) {
                Storage::delete('public/institutionalBuilder/' . $institutionalBuilder->attachment_img);
            }

            $attachImg = $request->file('attachment_img');
            $imgName = $slug . '.' . $attachImg->getClientOriginalExtension();
            Storage::putFileAs('public/institutionalBuilder', $attachImg, $imgName);

            $institutionalBuilder->attachment_img = $imgName;
        } else {
            $extension = Str::substr($institutionalBuilder->attachment_img, strpos($institutionalBuilder->attachment_img, ".") + 1, 4);
            $imgName = $slug . '.' . $extension;
            Storage::move('public/institutionalBuilder/' . $institutionalBuilder->attachment_img, 'public/institutionalBuilder/' . $imgName);
            $institutionalBuilder->attachment_img = $imgName;
        }

        $institutionalBuilder->title = $request->input('title');
        $institutionalBuilder->save();

        return redirect()->route('institutionalBuilder.edit', $institutionalBuilder->id)->with('success', 'Data Kelembagaan Tim Pembina telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstitutionalBuilder  $institutionalBuilder
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstitutionalBuilder $institutionalBuilder)
    {
        Session::flash('success', 'Data Kelembagaan Tim Pembina (' . $institutionalBuilder->title . ') telah dihapus.');

        if (Storage::exists('public/institutionalBuilder/' . $institutionalBuilder->attachment_pdf)) {
            Storage::delete('public/institutionalBuilder/' . $institutionalBuilder->attachment_pdf);
        }

        if (Storage::exists('public/institutionalBuilder/' . $institutionalBuilder->attachment_img)) {
            Storage::delete('public/institutionalBuilder/' . $institutionalBuilder->attachment_img);
        }

        $institutionalBuilder->delete();
    }

    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $institutionalBuilders = InstitutionalBuilder::with('user')->get();

            return DataTables::of($institutionalBuilders)
                ->addColumn('attachment', function ($institutionalBuilder) {
                    return view('dashboard.institutional.builder.attachment', compact('institutionalBuilder'))->render();
                })
                ->addColumn('action', function ($institutionalBuilder) {
                    return view('dashboard.institutional.builder.action', compact('institutionalBuilder'))->render();
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
            'user_id' => 'numeric'
        ]);
    }
}
