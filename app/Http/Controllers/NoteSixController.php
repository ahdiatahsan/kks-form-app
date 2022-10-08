<?php

namespace App\Http\Controllers;

use App\Models\NoteSix;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class NoteSixController extends Controller
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
        return view('dashboard.note.tatanan6.index');
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
     * @param  \App\Models\NoteSix  $noteSix
     * @return \Illuminate\Http\Response
     */
    public function show(NoteSix $noteSix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoteSix  $noteSix
     * @return \Illuminate\Http\Response
     */
    public function edit(NoteSix $noteSix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NoteSix  $noteSix
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NoteSix $noteSix)
    {
        $request->validate([
            'note' => 'string'
        ]);

        $noteSix->note = $request->input('note');
        $noteSix->save();

        return redirect()->route('noteSix.index')->with('success', 'Catatan untuk pertanyaan nomor '. $noteSix->id .' berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoteSix  $noteSix
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoteSix $noteSix)
    {
        //
    }
    
    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $noteSixs = noteSix::with('user')->get();

            return DataTables::of($noteSixs)
                ->addColumn('attachment', function ($noteSix) {
                    return view('dashboard.note.tatanan6.attachment', compact('noteSix'))->render();
                })
                ->addColumn('action', function ($noteSix) {
                    return view('dashboard.note.tatanan6.action', compact('noteSix'))->render();
                })
                ->rawColumns(['attachment', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
    }
}
