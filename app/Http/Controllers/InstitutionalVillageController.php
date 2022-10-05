<?php

namespace App\Http\Controllers;

use App\Models\InstitutionalVillage;
// use App\Http\Requests\StoreInstitutionalVillageRequest;
// use App\Http\Requests\UpdateInstitutionalVillageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class InstitutionalVillageController extends Controller
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
        return view('dashboard.institutional.village.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Check data exist //
        $dataExist = InstitutionalVillage::select('id')->with('user')->where('user_id', '=', Auth::user()->id)->first();
        if ($dataExist != null) {
            return redirect()->route('institutionalVillage.index')->with('warning', 'Anda telah memiliki data di Kelembagaan Pokja Desa Kelurahan. 
            Ubah atau hapus data lama untuk dapat menambahkan data baru');
        }

        return view('dashboard.institutional.village.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInstitutionalVillageRequest  $request
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
        Storage::putFileAs('public/institutionalVillage', $attachPdf, $pdfName);

        $attachImg = $request->file('attachment_img');
        $imgName = $slug . '.' . $attachImg->getClientOriginalExtension();
        Storage::putFileAs('public/institutionalVillage', $attachImg, $imgName);

        institutionalVillage::create([
            'title' => $request->input('title'),
            'attachment_pdf' => $pdfName,
            'attachment_img' => $imgName,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('institutionalVillage.index')->with('success', 'Data Kelembagaan Pokja Desa Kelurahan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InstitutionalVillage  $institutionalVillage
     * @return \Illuminate\Http\Response
     */
    public function show(InstitutionalVillage $institutionalVillage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InstitutionalVillage  $institutionalVillage
     * @return \Illuminate\Http\Response
     */
    public function edit(InstitutionalVillage $institutionalVillage)
    {
        //Check Active User //
        $activeUser = Auth::user();
        if ($institutionalVillage->user_id == $activeUser->id || $activeUser->hasRole('administrator')) {
            return view('dashboard.institutional.village.edit', compact('institutionalVillage'));
        } else {
            return redirect()->route('institutionalVillage.index')->with('warning', 'Anda tidak dapat mengubah data milik pengguna lain.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInstitutionalVillageRequest  $request
     * @param  \App\Models\InstitutionalVillage  $institutionalVillage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstitutionalVillage $institutionalVillage)
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

            if (Storage::exists('public/institutionalVillage/' . $institutionalVillage->attachment_pdf)) {
                Storage::delete('public/institutionalVillage/' . $institutionalVillage->attachment_pdf);
            }

            $attachPdf = $request->file('attachment_pdf');
            $pdfName = $slug . '.' . $attachPdf->getClientOriginalExtension();
            Storage::putFileAs('public/institutionalVillage', $attachPdf, $pdfName);

            $institutionalVillage->attachment_pdf = $pdfName;
        } else {
            $pdfName = $slug . '.pdf';
            Storage::move('public/institutionalVillage/' . $institutionalVillage->attachment_pdf, 'public/institutionalVillage/' . $pdfName);
            $institutionalVillage->attachment_pdf = $pdfName;
        }

        if ($request->hasFile('attachment_img')) {
            $request->validate([
                'attachment_img' => 'required|file|max:2048|mimes:jpeg,jpg,png,webp'
            ], [
                'attachment_img.mimes' => 'Dokumentasi harus berupa file jpeg/jpg/png/webp.',
                'attachment_img.max' => 'Dokumentasi tidak boleh lebih besar dari 2 MB',
            ]);

            if (Storage::exists('public/institutionalVillage/' . $institutionalVillage->attachment_img)) {
                Storage::delete('public/institutionalVillage/' . $institutionalVillage->attachment_img);
            }

            $attachImg = $request->file('attachment_img');
            $imgName = $slug . '.' . $attachImg->getClientOriginalExtension();
            Storage::putFileAs('public/institutionalVillage', $attachImg, $imgName);

            $institutionalVillage->attachment_img = $imgName;
        } else {
            $extension = Str::substr($institutionalVillage->attachment_img, strpos($institutionalVillage->attachment_img, ".") + 1, 4);
            $imgName = $slug . '.' . $extension;
            Storage::move('public/institutionalVillage/' . $institutionalVillage->attachment_img, 'public/institutionalVillage/' . $imgName);
            $institutionalVillage->attachment_img = $imgName;
        }

        $institutionalVillage->title = $request->input('title');
        $institutionalVillage->save();

        return redirect()->route('institutionalVillage.edit', $institutionalVillage->id)->with('success', 'Data Kelembagaan Pokja Desa Kelurahan telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstitutionalVillage  $institutionalVillage
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstitutionalVillage $institutionalVillage)
    {
        Session::flash('success', 'Data Kelembagaan Forum Kabupaten (' . $institutionalVillage->title . ') telah dihapus.');

        if (Storage::exists('public/institutionalVillage/' . $institutionalVillage->attachment_pdf)) {
            Storage::delete('public/institutionalVillage/' . $institutionalVillage->attachment_pdf);
        }

        if (Storage::exists('public/institutionalVillage/' . $institutionalVillage->attachment_img)) {
            Storage::delete('public/institutionalVillage/' . $institutionalVillage->attachment_img);
        }

        $institutionalVillage->delete();
    }
    
    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $institutionalVillages = institutionalVillage::with('user')->get();

            return DataTables::of($institutionalVillages)
                ->addColumn('attachment', function ($institutionalVillage) {
                    return view('dashboard.institutional.village.attachment', compact('institutionalVillage'))->render();
                })
                ->addColumn('action', function ($institutionalVillage) {
                    return view('dashboard.institutional.village.action', compact('institutionalVillage'))->render();
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
