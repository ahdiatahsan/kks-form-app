<?php

namespace App\Http\Controllers;

use App\Models\Setting;
// use App\Http\Requests\StoreSettingRequest;
// use App\Http\Requests\UpdateSettingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:setting-view'])->only(['index', 'show', 'datatable']);
        $this->middleware(['permission:setting-create'])->only(['create', 'store']);
        $this->middleware(['permission:setting-update'])->only(['edit', 'update']);
        $this->middleware(['permission:setting-delete'])->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.setting.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'period' => 'required|string|unique:settings,period'
        ], [
            'period.unique' => 'Tahun periode telah ada sebelumnya'
        ]);

        Setting::create([
            'period' => $request->input('period')
        ]);

        return redirect()->route('setting.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('dashboard.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSettingRequest  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'period' => 'required|string|unique:settings,period,' . $setting->id,
        ], [
            'period.unique' => 'Tahun periode telah ada sebelumnya'
        ]);

        $setting->period = $request->input('period');
        $setting->save();

        return redirect()->route('setting.edit', $setting->id)->with('success', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        Session::flash('success', 'Tahun periode ' . $setting->period . ' beserta seluruh datanya telah dihapus.');
        $setting->delete();
    }

    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $settings = Setting::get();

            return DataTables::of($settings)
                ->addColumn('action', function ($setting) {
                    return view('dashboard.setting.action', compact('setting'))->render();
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
    }
}
