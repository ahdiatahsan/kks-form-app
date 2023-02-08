<?php

namespace App\Http\Controllers;

use App\Models\NoteOne;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class NoteOneController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:note-view'])->only(['index', 'show', 'datatable']);
        $this->middleware(['permission:note-create'])->only(['create', 'store']);
        $this->middleware(['permission:note-update'])->only(['edit', 'update']);
        $this->middleware(['permission:note-delete'])->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $settings = Setting::all();
        session(['periodNote' => 1]);

        if (!empty($request->filter_period)) {
            $period = $request->session()->put('periodNote', $request->filter_period);
            $noteOnes = NoteOne::with('user')
                ->where('setting_id', '=', $request->filter_period)
                ->get();
        } else {
            $noteOnes = NoteOne::with('user')
                ->where('setting_id', '=', 1)
                ->get();
        }

        return view('dashboard.note.tatanan1.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NoteOne  $noteOne
     * @return \Illuminate\Http\Response
     */
    public function show(NoteOne $noteOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoteOne  $noteOne
     * @return \Illuminate\Http\Response
     */
    public function edit(NoteOne $noteOne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NoteOne  $noteOne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NoteOne $noteOne)
    {
        $period = $request->session()->get('periodNote', 1);
        $year = Setting::where('id', '=', $period)->first();
        $no = Str::remove('p', $noteOne->code);

        $request->validate([
            'note' => 'string'
        ]);

        $noteOne->note = $request->input('note');
        $noteOne->save();

        return redirect()->route('noteOne.index')
            ->with('success', 'Catatan pertanyaan No. ' . $no . ' tahun periode ' . $year->period . ' berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoteOne  $noteOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoteOne $noteOne)
    {
        //
    }

    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            if (!empty($request->filter_period)) {
                $period = $request->session()->put('periodNote', $request->filter_period);
                $noteOnes = NoteOne::with('user')
                    ->where('setting_id', '=', $request->filter_period)
                    ->get();
            } else {
                $noteOnes = NoteOne::with('user')
                    ->where('setting_id', '=', 1)
                    ->get();
            }

            return DataTables::of($noteOnes)
                ->addColumn('attachment', function ($noteOne) {
                    return view('dashboard.note.tatanan1.attachment', compact('noteOne'))->render();
                })
                ->addColumn('action', function ($noteOne) {
                    return view('dashboard.note.tatanan1.action', compact('noteOne'))->render();
                })
                ->rawColumns(['attachment', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
    }
}
