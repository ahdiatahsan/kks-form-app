<?php

namespace App\Http\Controllers;

use App\Models\NoteOne;
use Illuminate\Http\Request;
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
    public function index()
    {
        return view('dashboard.note.tatanan1.index');
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
        $request->validate([
            'note' => 'string'
        ]);

        $noteOne->note = $request->input('note');
        $noteOne->save();

        return redirect()->route('noteOne.index')->with('success', 'Catatan untuk pertanyaan nomor '. $noteOne->id .' berhasil disimpan.');
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
            $noteOnes = NoteOne::with('user')->get();

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
