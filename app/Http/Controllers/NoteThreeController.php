<?php

namespace App\Http\Controllers;

use App\Models\NoteThree;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
    public function index(Request $request)
    {
        $settings = Setting::all();
        session(['periodNote' => 1]);

        if (!empty($request->filter_period)) {
            $period = $request->session()->put('periodNote', $request->filter_period);
            $noteThrees = NoteThree::with('user')
                ->where('setting_id', '=', $request->filter_period)
                ->get();
        } else {
            $noteThrees = NoteThree::with('user')
                ->where('setting_id', '=', 1)
                ->get();
        }

        return view('dashboard.note.tatanan3.index', compact('settings'));
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
        $period = $request->session()->get('periodNote', 1);
        $year = Setting::where('id', '=', $period)->first();
        $no = Str::remove('p', $noteThree->code);

        $request->validate([
            'note' => 'string'
        ]);

        $noteThree->note = $request->input('note');
        $noteThree->save();

        return redirect()->route('noteThree.index')
            ->with('success', 'Catatan pertanyaan No. ' . $no . ' tahun periode ' . $year->period . ' berhasil disimpan.');
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
            if (!empty($request->filter_period)) {
                $period = $request->session()->put('periodNote', $request->filter_period);
                $noteThrees = noteThree::with('user')
                    ->where('setting_id', '=', $request->filter_period)
                    ->get();
            } else {
                $noteThrees = noteThree::with('user')
                    ->where('setting_id', '=', 1)
                    ->get();
            }

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
