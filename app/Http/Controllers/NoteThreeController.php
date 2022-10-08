<?php

namespace App\Http\Controllers;

use App\Models\NoteThree;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class NoteThreeController extends Controller
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
        return view('dashboard.note.tatanan3.index');
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
     * @param  \App\Models\NoteThree  $noteThree
     * @return \Illuminate\Http\Response
     */
    public function show(NoteThree $noteThree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoteThree  $noteThree
     * @return \Illuminate\Http\Response
     */
    public function edit(NoteThree $noteThree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NoteThree  $noteThree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NoteThree $noteThree)
    {
        $request->validate([
            'note' => 'string'
        ]);

        $noteThree->note = $request->input('note');
        $noteThree->save();

        return redirect()->route('noteThree.index')->with('success', 'Catatan untuk pertanyaan nomor '. $noteThree->id .' berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoteThree  $noteThree
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoteThree $noteThree)
    {
        //
    }
    
    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $noteThrees = noteThree::with('user')->get();

            return DataTables::of($noteThrees)
                ->addColumn('attachment', function ($noteThree) {
                    return view('dashboard.note.tatanan3.attachment', compact('noteThree'))->render();
                })
                ->addColumn('action', function ($noteThree) {
                    return view('dashboard.note.tatanan3.action', compact('noteThree'))->render();
                })
                ->rawColumns(['attachment', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
    }
}
