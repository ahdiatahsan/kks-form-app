<?php

namespace App\Http\Controllers;

use App\Models\NoteFive;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class NoteFiveController extends Controller
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
        return view('dashboard.note.tatanan5.index');
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
     * @param  \App\Models\NoteFive  $noteFive
     * @return \Illuminate\Http\Response
     */
    public function show(NoteFive $noteFive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoteFive  $noteFive
     * @return \Illuminate\Http\Response
     */
    public function edit(NoteFive $noteFive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NoteFive  $noteFive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NoteFive $noteFive)
    {
        $request->validate([
            'note' => 'string'
        ]);

        $noteFive->note = $request->input('note');
        $noteFive->save();

        return redirect()->route('noteFive.index')->with('success', 'Catatan untuk pertanyaan nomor '. $noteFive->id .' berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoteFive  $noteFive
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoteFive $noteFive)
    {
        //
    }
    
    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $noteFives = NoteFive::with('user')->get();

            return DataTables::of($noteFives)
                ->addColumn('attachment', function ($noteFive) {
                    return view('dashboard.note.tatanan5.attachment', compact('noteFive'))->render();
                })
                ->addColumn('action', function ($noteFive) {
                    return view('dashboard.note.tatanan5.action', compact('noteFive'))->render();
                })
                ->rawColumns(['attachment', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
    }
}
