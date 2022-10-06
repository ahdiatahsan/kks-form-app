<?php

namespace App\Http\Controllers;

use App\Models\InstitutionalDistrict;
use App\Models\InstitutionalVillage;
use App\Models\User;
// use App\Http\Requests\StoreInstitutionalDistrictRequest;
// use App\Http\Requests\UpdateInstitutionalDistrictRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class InstitutionalDistrictController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:district-view'])->only(['index', 'show', 'datatable']);
        $this->middleware(['permission:district-create'])->only(['create', 'store']);
        $this->middleware(['permission:district-update'])->only(['edit', 'update']);
        $this->middleware(['permission:district-delete'])->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.institutional.district.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Check data exist //
        $dataExist = InstitutionalDistrict::select('id')->with('user')->where('user_id', '=', Auth::user()->id)->first();
        if ($dataExist != null) {
            return redirect()->route('institutionalDistrict.index')->with('warning', 'Anda telah memiliki data di Kelembagaan Forkom Kecamatan. 
            Ubah atau hapus data lama untuk dapat menambahkan data baru');
        }

        return view('dashboard.institutional.district.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInstitutionalDistrictRequest  $request
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
        Storage::putFileAs('public/institutionalDistrict', $attachPdf, $pdfName);

        $attachImg = $request->file('attachment_img');
        $imgName = $slug . '.' . $attachImg->getClientOriginalExtension();
        Storage::putFileAs('public/institutionalDistrict', $attachImg, $imgName);

        InstitutionalDistrict::create([
            'title' => $request->input('title'),
            'attachment_pdf' => $pdfName,
            'attachment_img' => $imgName,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('institutionalDistrict.index')->with('success', 'Data Kelembagaan Forkom Kecamatan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InstitutionalDistrict  $institutionalDistrict
     * @return \Illuminate\Http\Response
     */
    public function show(InstitutionalDistrict $institutionalDistrict, Request $request)
    {
        //Get district name and check if user is a district //
        $districtName = User::select('name')->where('id', '=', $institutionalDistrict->user_id)->first();
        $districtCount = User::where('district_id', '=', $institutionalDistrict->user_id)->count();
        if ($districtCount < 1) {
            return redirect()->route('institutionalDistrict.index')->with('warning', 'Rincian gagal diakses karena pengguna yang dimaksud bukan merupakan sebuah Kecamatan.');
        }

        if ($request->ajax()) {
            $villageIds = User::where('district_id', '=', $institutionalDistrict->user_id)->get('id');
            $institutionalVillages = InstitutionalVillage::with('user')->whereIn('user_id', $villageIds)->get();

            return DataTables::of($institutionalVillages)
                ->addColumn('attachment', function ($institutionalVillage) {
                    return view('dashboard.institutional.district.attachmentShow', compact('institutionalVillage'))->render();
                })
                ->rawColumns(['attachment'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('dashboard.institutional.district.show', compact('institutionalDistrict', 'districtName'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InstitutionalDistrict  $institutionalDistrict
     * @return \Illuminate\Http\Response
     */
    public function edit(InstitutionalDistrict $institutionalDistrict)
    {
        //Check Active User //
        $activeUser = Auth::user();
        if ($institutionalDistrict->user_id == $activeUser->id || $activeUser->hasRole('administrator')) {
            return view('dashboard.institutional.district.edit', compact('institutionalDistrict'));
        } else {
            return redirect()->route('institutionalDistrict.index')->with('warning', 'Anda tidak dapat mengubah data milik pengguna lain.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInstitutionalDistrictRequest  $request
     * @param  \App\Models\InstitutionalDistrict  $institutionalDistrict
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstitutionalDistrict $institutionalDistrict)
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

            if (Storage::exists('public/institutionalDistrict/' . $institutionalDistrict->attachment_pdf)) {
                Storage::delete('public/institutionalDistrict/' . $institutionalDistrict->attachment_pdf);
            }

            $attachPdf = $request->file('attachment_pdf');
            $pdfName = $slug . '.' . $attachPdf->getClientOriginalExtension();
            Storage::putFileAs('public/institutionalDistrict', $attachPdf, $pdfName);

            $institutionalDistrict->attachment_pdf = $pdfName;
        } else {
            $pdfName = $slug . '.pdf';
            Storage::move('public/institutionalDistrict/' . $institutionalDistrict->attachment_pdf, 'public/institutionalDistrict/' . $pdfName);
            $institutionalDistrict->attachment_pdf = $pdfName;
        }

        if ($request->hasFile('attachment_img')) {
            $request->validate([
                'attachment_img' => 'required|file|max:2048|mimes:jpeg,jpg,png,webp'
            ], [
                'attachment_img.mimes' => 'Dokumentasi harus berupa file jpeg/jpg/png/webp.',
                'attachment_img.max' => 'Dokumentasi tidak boleh lebih besar dari 2 MB',
            ]);

            if (Storage::exists('public/institutionalDistrict/' . $institutionalDistrict->attachment_img)) {
                Storage::delete('public/institutionalDistrict/' . $institutionalDistrict->attachment_img);
            }

            $attachImg = $request->file('attachment_img');
            $imgName = $slug . '.' . $attachImg->getClientOriginalExtension();
            Storage::putFileAs('public/institutionalDistrict', $attachImg, $imgName);

            $institutionalDistrict->attachment_img = $imgName;
        } else {
            $extension = Str::substr($institutionalDistrict->attachment_img, strpos($institutionalDistrict->attachment_img, ".") + 1, 4);
            $imgName = $slug . '.' . $extension;
            Storage::move('public/institutionalDistrict/' . $institutionalDistrict->attachment_img, 'public/institutionalDistrict/' . $imgName);
            $institutionalDistrict->attachment_img = $imgName;
        }

        $institutionalDistrict->title = $request->input('title');
        $institutionalDistrict->save();

        return redirect()->route('institutionalDistrict.edit', $institutionalDistrict->id)->with('success', 'Data Kelembagaan Forkom Kecamatan telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstitutionalDistrict  $institutionalDistrict
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstitutionalDistrict $institutionalDistrict)
    {
        Session::flash('success', 'Data Kelembagaan Forum Kabupaten (' . $institutionalDistrict->title . ') telah dihapus.');

        if (Storage::exists('public/institutionalDistrict/' . $institutionalDistrict->attachment_pdf)) {
            Storage::delete('public/institutionalDistrict/' . $institutionalDistrict->attachment_pdf);
        }

        if (Storage::exists('public/institutionalDistrict/' . $institutionalDistrict->attachment_img)) {
            Storage::delete('public/institutionalDistrict/' . $institutionalDistrict->attachment_img);
        }

        $institutionalDistrict->delete();
    }

    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $institutionalDistricts = institutionalDistrict::with('user')->get();

            return DataTables::of($institutionalDistricts)
                ->addColumn('attachment', function ($institutionalDistrict) {
                    return view('dashboard.institutional.district.attachment', compact('institutionalDistrict'))->render();
                })
                ->addColumn('action', function ($institutionalDistrict) {
                    return view('dashboard.institutional.district.action', compact('institutionalDistrict'))->render();
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
