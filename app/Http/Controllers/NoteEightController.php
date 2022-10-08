<?php

namespace App\Http\Controllers;

use App\Models\NoteEight;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class NoteEightController extends Controller
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
        return view('dashboard.note.tatanan8.index');
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
     * @param  \App\Models\NoteEight  $noteEight
     * @return \Illuminate\Http\Response
     */
    public function show(NoteEight $noteEight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoteEight  $noteEight
     * @return \Illuminate\Http\Response
     */
    public function edit(NoteEight $noteEight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NoteEight  $noteEight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NoteEight $noteEight)
    {
        $request->validate([
            'note' => 'string'
        ]);

        $noteEight->note = $request->input('note');
        $noteEight->save();

        return redirect()->route('noteEight.index')->with('success', 'Catatan untuk pertanyaan nomor '. $noteEight->id .' berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoteEight  $noteEight
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoteEight $noteEight)
    {
        //
    }
    
    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $noteEights = NoteEight::with('user')->get();

            return DataTables::of($noteEights)
                ->addColumn('attachment', function ($noteEight) {
                    return view('dashboard.note.tatanan8.attachment', compact('noteEight'))->render();
                })
                ->addColumn('action', function ($noteEight) {
                    return view('dashboard.note.tatanan8.action', compact('noteEight'))->render();
                })
                ->rawColumns(['attachment', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
    }
}
