<?php

namespace App\Http\Controllers;

use App\Models\NoteTwo;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
    public function index(Request $request)
    {
        $settings = Setting::all();
        session(['periodNote' => 1]);

        if (!empty($request->filter_period)) {
            $period = $request->session()->put('periodNote', $request->filter_period);
            $noteTwos = NoteTwo::with('user')
                ->where('setting_id', '=', $request->filter_period)
                ->get();
        } else {
            $noteTwos = NoteTwo::with('user')
                ->where('setting_id', '=', 1)
                ->get();
        }

        return view('dashboard.note.tatanan2.index', compact('settings'));
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
        $period = $request->session()->get('periodNote', 1);
        $year = Setting::where('id', '=', $period)->first();
        $no = Str::remove('p', $noteTwo->code);

        $request->validate([
            'note' => 'string'
        ]);

        $noteTwo->note = $request->input('note');
        $noteTwo->save();

        return redirect()->route('noteTwo.index')
            ->with('success', 'Catatan pertanyaan No. ' . $no . ' tahun periode ' . $year->period . ' berhasil disimpan.');
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
            if (!empty($request->filter_period)) {
                $period = $request->session()->put('periodNote', $request->filter_period);
                $noteTwos = noteTwo::with('user')
                    ->where('setting_id', '=', $request->filter_period)
                    ->get();
            } else {
                $noteTwos = noteTwo::with('user')
                    ->where('setting_id', '=', 1)
                    ->get();
            }

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
