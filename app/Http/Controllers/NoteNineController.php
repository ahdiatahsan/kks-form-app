<?php

namespace App\Http\Controllers;

use App\Models\NoteNine;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class NoteNineController extends Controller
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
            $noteNines = NoteNine::with('user')
                ->where('setting_id', '=', $request->filter_period)
                ->get();
        } else {
            $noteNines = NoteNine::with('user')
                ->where('setting_id', '=', 1)
                ->get();
        }
        return view('dashboard.note.tatanan9.index', compact('settings'));
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
     * @param  \App\Models\NoteNine  $noteNine
     * @return \Illuminate\Http\Response
     */
    public function show(NoteNine $noteNine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoteNine  $noteNine
     * @return \Illuminate\Http\Response
     */
    public function edit(NoteNine $noteNine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NoteNine  $noteNine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NoteNine $noteNine)
    {
        $period = $request->session()->get('periodNote', 1);
        $year = Setting::where('id', '=', $period)->first();
        $no = Str::remove('p', $noteNine->code);

        $request->validate([
            'note' => 'string'
        ]);

        $noteNine->note = $request->input('note');
        $noteNine->save();

        return redirect()->route('noteNine.index')
            ->with('success', 'Catatan pertanyaan No. ' . $no . ' tahun periode ' . $year->period . ' berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoteNine  $noteNine
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoteNine $noteNine)
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
                $noteNines = noteNine::with('user')
                    ->where('setting_id', '=', $request->filter_period)
                    ->get();
            } else {
                $noteNines = noteNine::with('user')
                    ->where('setting_id', '=', 1)
                    ->get();
            }

            return DataTables::of($noteNines)
                ->addColumn('attachment', function ($noteNine) {
                    return view('dashboard.note.tatanan9.attachment', compact('noteNine'))->render();
                })
                ->addColumn('action', function ($noteNine) {
                    return view('dashboard.note.tatanan9.action', compact('noteNine'))->render();
                })
                ->rawColumns(['attachment', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
    }
}
