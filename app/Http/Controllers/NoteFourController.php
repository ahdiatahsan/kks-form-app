<?php

namespace App\Http\Controllers;

use App\Models\NoteFour;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class NoteFourController extends Controller
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
        return view('dashboard.note.tatanan4.index');
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
     * @param  \App\Models\NoteFour  $noteFour
     * @return \Illuminate\Http\Response
     */
    public function show(NoteFour $noteFour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoteFour  $noteFour
     * @return \Illuminate\Http\Response
     */
    public function edit(NoteFour $noteFour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NoteFour  $noteFour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NoteFour $noteFour)
    {
        $request->validate([
            'note' => 'string'
        ]);

        $noteFour->note = $request->input('note');
        $noteFour->save();

        return redirect()->route('noteFour.index')->with('success', 'Catatan untuk pertanyaan nomor '. $noteFour->id .' berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoteFour  $noteFour
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoteFour $noteFour)
    {
        //
    }

    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $noteFours = NoteFour::with('user')->get();

            return DataTables::of($noteFours)
                ->addColumn('attachment', function ($noteFour) {
                    return view('dashboard.note.tatanan4.attachment', compact('noteFour'))->render();
                })
                ->addColumn('action', function ($noteFour) {
                    return view('dashboard.note.tatanan4.action', compact('noteFour'))->render();
                })
                ->rawColumns(['attachment', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
    }
}
