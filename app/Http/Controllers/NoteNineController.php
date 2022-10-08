<?php

namespace App\Http\Controllers;

use App\Models\NoteNine;
use Illuminate\Http\Request;
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
    public function index()
    {
        return view('dashboard.note.tatanan9.index');
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
        $request->validate([
            'note' => 'string'
        ]);

        $noteNine->note = $request->input('note');
        $noteNine->save();

        return redirect()->route('noteNine.index')->with('success', 'Catatan untuk pertanyaan nomor '. $noteNine->id .' berhasil disimpan.');
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
            $noteNines = NoteNine::with('user')->get();

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
