<?php

namespace App\Http\Controllers;

use App\Models\NoteSeven;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class NoteSevenController extends Controller
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
        return view('dashboard.note.tatanan7.index');
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
     * @param  \App\Models\NoteSeven  $noteSeven
     * @return \Illuminate\Http\Response
     */
    public function show(NoteSeven $noteSeven)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoteSeven  $noteSeven
     * @return \Illuminate\Http\Response
     */
    public function edit(NoteSeven $noteSeven)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NoteSeven  $noteSeven
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NoteSeven $noteSeven)
    {
        $request->validate([
            'note' => 'string'
        ]);

        $noteSeven->note = $request->input('note');
        $noteSeven->save();

        return redirect()->route('noteSeven.index')->with('success', 'Catatan untuk pertanyaan nomor '. $noteSeven->id .' berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoteSeven  $noteSeven
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoteSeven $noteSeven)
    {
        //
    }

    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $noteSevens = noteSeven::with('user')->get();

            return DataTables::of($noteSevens)
                ->addColumn('attachment', function ($noteSeven) {
                    return view('dashboard.note.tatanan7.attachment', compact('noteSeven'))->render();
                })
                ->addColumn('action', function ($noteSeven) {
                    return view('dashboard.note.tatanan7.action', compact('noteSeven'))->render();
                })
                ->rawColumns(['attachment', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
    }
}
