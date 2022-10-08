<?php

namespace App\Http\Controllers;

use App\Models\NoteTwo;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class NoteTwoController extends Controller
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
        return view('dashboard.note.tatanan2.index');
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
     * @param  \App\Models\NoteTwo  $noteTwo
     * @return \Illuminate\Http\Response
     */
    public function show(NoteTwo $noteTwo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoteTwo  $noteTwo
     * @return \Illuminate\Http\Response
     */
    public function edit(NoteTwo $noteTwo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NoteTwo  $noteTwo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NoteTwo $noteTwo)
    {
        $request->validate([
            'note' => 'string'
        ]);

        $noteTwo->note = $request->input('note');
        $noteTwo->save();

        return redirect()->route('noteTwo.index')->with('success', 'Catatan untuk pertanyaan nomor '. $noteTwo->id .' berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoteTwo  $noteTwo
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoteTwo $noteTwo)
    {
        //
    }
    
    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $noteTwos = noteTwo::with('user')->get();

            return DataTables::of($noteTwos)
                ->addColumn('attachment', function ($noteTwo) {
                    return view('dashboard.note.tatanan2.attachment', compact('noteTwo'))->render();
                })
                ->addColumn('action', function ($noteTwo) {
                    return view('dashboard.note.tatanan2.action', compact('noteTwo'))->render();
                })
                ->rawColumns(['attachment', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
    }
}
