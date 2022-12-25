<?php

namespace App\Http\Controllers;

use App\Models\Conclusion;
use App\Models\Setting;
// use App\Http\Requests\StoreConclusionRequest;
// use App\Http\Requests\UpdateConclusionRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ConclusionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:conclusion-view'])->only(['index', 'show']);
        $this->middleware(['permission:conclusion-create'])->only(['create', 'store']);
        $this->middleware(['permission:conclusion-update'])->only(['edit', 'update']);
        $this->middleware(['permission:conclusion-delete'])->only(['destroy']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.conclusion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.conclusion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreConclusionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'attachment' => 'required|file|max:3048|mimes:pdf',
            'period' => 'required|numeric|unique:conclusions,setting_id'
        ], [
            'attachment.mimes' => 'Berkas harus berupa file pdf.',
            'attachment.max' => 'Berkas tidak boleh lebih besar dari 3 MB',
            'period.unique' => 'Penutup tahun periode tersebut telah ada sebelumnya.'
        ]);
        
        $setting = Setting::where('id', '=', $request->input('period'))->first();
        $attachFile = $request->file('attachment');
        $attachName = 'Penutup KKS Enrekang ' . $setting->period . '.' . $attachFile->getClientOriginalExtension();
        Storage::putFileAs('public/conclusion', $attachFile, $attachName);

        Conclusion::create([
            'attachment' => $attachName,
            'body' => $request->input('body'),
            'setting_id' => $request->input('period')
        ]);

        return redirect()->route('conclusion.create')->with('success', 'Data Penutup periode ' . $setting->period . ' berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conclusion  $conclusion
     * @return \Illuminate\Http\Response
     */
    public function show(Conclusion $conclusion)
    {
        return view('dashboard.conclusion.show', compact('conclusion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conclusion  $conclusion
     * @return \Illuminate\Http\Response
     */
    public function edit(Conclusion $conclusion)
    {
        return view('dashboard.conclusion.edit', compact('conclusion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConclusionRequest  $request
     * @param  \App\Models\Conclusion  $conclusion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conclusion $conclusion)
    {
        $setting = Setting::where('id', '=', $request->input('period'))->first();

        if ($request->file() != null) {
            $request->validate([
                'attachment' => 'required|file|max:3048|mimes:pdf',
                'period' => 'required|numeric|unique:conclusions,setting_id,' . $conclusion->id,
            ], [
                'attachment.mimes' => 'Berkas harus berupa file pdf.',
                'attachment.max' => 'Berkas tidak boleh lebih besar dari 3 MB',
                'period.unique' => 'Penutup tahun periode tersebut telah ada sebelumnya.'
            ]);

            if (Storage::exists('public/conclusion/' . $conclusion->attachment)) {
                Storage::delete('public/conclusion/' . $conclusion->attachment);
            }

            $attachFile = $request->file('attachment');
            $extension = $attachFile->extension();
            $attachName = 'Penutup KKS Enrekang ' . $setting->period . '.' . $extension;
            Storage::putFileAs('public/conclusion', $attachFile, $attachName);

            $conclusion->attachment = $attachName;
        } else {
            $request->validate([
                'period' => 'required|numeric|unique:conclusions,setting_id,' . $conclusion->id
            ], [
                'period.unique' => 'Penutup tahun periode tersebut telah ada sebelumnya.'
            ]);

            $attachName = 'Penutup KKS Enrekang ' . $setting->period . '.pdf';
            Storage::move('public/conclusion/' . $conclusion->attachment, 'public/conclusion/' . $attachName);
            $conclusion->attachment = $attachName;
        }

        $conclusion->body = $request->input('body');
        $conclusion->setting_id = $request->input('period');
        $conclusion->save();

        return redirect()->route('conclusion.edit', $conclusion->id)->with('success', 'Data Penutup telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conclusion  $conclusion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conclusion $conclusion)
    {
        Session::flash('success', 'Data Penutup tahun periode ' . $conclusion->setting->period . ' telah dihapus.');

        if (Storage::exists('public/conclusion/' . $conclusion->attachment)) {
            Storage::delete('public/conclusion/' . $conclusion->attachment);
        }

        $conclusion->delete();
    }
    
    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $conclusions = Conclusion::with('setting')->get();

            return DataTables::of($conclusions)
                ->addColumn('attachment', function ($conclusion) {
                    return view('dashboard.conclusion.attachment', compact('conclusion'))->render();
                })
                ->addColumn('action', function ($conclusion) {
                    return view('dashboard.conclusion.action', compact('conclusion'))->render();
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
}
