<?php

namespace App\Http\Controllers;

use App\Models\Introduction;
use App\Models\Setting;
// use App\Http\Requests\StoreIntroductionRequest;
// use App\Http\Requests\UpdateIntroductionRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class IntroductionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:introduction-view'])->only(['index', 'show']);
        $this->middleware(['permission:introduction-create'])->only(['create', 'store']);
        $this->middleware(['permission:introduction-update'])->only(['edit', 'update']);
        $this->middleware(['permission:introduction-delete'])->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.introduction.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.introduction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIntroductionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'attachment' => 'required|file|max:3048|mimes:pdf',
            'period' => 'required|numeric|unique:introductions,setting_id'
        ], [
            'attachment.mimes' => 'Berkas harus berupa file pdf.',
            'attachment.max' => 'Berkas tidak boleh lebih besar dari 3 MB',
            'period.unique' => 'Pendahuluan tahun periode tersebut telah ada sebelumnya.'
        ]);
        
        $setting = Setting::where('id', '=', $request->input('period'))->first();
        $attachFile = $request->file('attachment');
        $attachName = 'Pendahuluan KKS Enrekang ' . $setting->period . '.' . $attachFile->getClientOriginalExtension();
        Storage::putFileAs('public/introduction', $attachFile, $attachName);

        Introduction::create([
            'attachment' => $attachName,
            'body' => $request->input('body'),
            'setting_id' => $request->input('period')
        ]);

        return redirect()->route('introduction.create')->with('success', 'Data Pendahuluan periode ' . $setting->period . ' berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function show(Introduction $introduction)
    {
        return view('dashboard.introduction.show', compact('introduction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function edit(Introduction $introduction)
    {
        return view('dashboard.introduction.edit', compact('introduction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIntroductionRequest  $request
     * @param  \App\Models\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Introduction $introduction)
    {
        $setting = Setting::where('id', '=', $request->input('period'))->first();

        if ($request->file() != null) {
            $request->validate([
                'attachment' => 'required|file|max:3048|mimes:pdf',
                'period' => 'required|numeric|unique:introductions,setting_id,' . $introduction->id,
            ], [
                'attachment.mimes' => 'Berkas harus berupa file pdf.',
                'attachment.max' => 'Berkas tidak boleh lebih besar dari 3 MB',
                'period.unique' => 'Pendahuluan tahun periode tersebut telah ada sebelumnya.'
            ]);

            if (Storage::exists('public/introduction/' . $introduction->attachment)) {
                Storage::delete('public/introduction/' . $introduction->attachment);
            }

            $attachFile = $request->file('attachment');
            $extension = $attachFile->extension();
            $attachName = 'Pendahuluan KKS Enrekang ' . $setting->period . '.' . $extension;
            Storage::putFileAs('public/introduction', $attachFile, $attachName);

            $introduction->attachment = $attachName;
        } else {
            $request->validate([
                'period' => 'required|numeric|unique:introductions,setting_id,' . $introduction->id
            ], [
                'period.unique' => 'Pendahuluan tahun periode tersebut telah ada sebelumnya.'
            ]);

            $attachName = 'Pendahuluan KKS Enrekang ' . $setting->period . '.pdf';
            Storage::move('public/introduction/' . $introduction->attachment, 'public/introduction/' . $attachName);
            $introduction->attachment = $attachName;
        }

        $introduction->body = $request->input('body');
        $introduction->setting_id = $request->input('period');
        $introduction->save();

        return redirect()->route('introduction.edit', $introduction->id)->with('success', 'Data Pendahuluan telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Introduction $introduction)
    {
        Session::flash('success', 'Data Pendahuluan tahun periode ' . $introduction->setting->period . ' telah dihapus.');

        if (Storage::exists('public/introduction/' . $introduction->attachment)) {
            Storage::delete('public/introduction/' . $introduction->attachment);
        }

        $introduction->delete();
    }

    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $introductions = Introduction::with('setting')->get();

            return DataTables::of($introductions)
                ->addColumn('attachment', function ($introduction) {
                    return view('dashboard.introduction.attachment', compact('introduction'))->render();
                })
                ->addColumn('action', function ($introduction) {
                    return view('dashboard.introduction.action', compact('introduction'))->render();
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
