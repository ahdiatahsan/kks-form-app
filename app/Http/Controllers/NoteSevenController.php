<?php

namespace App\Http\Controllers;

use App\Models\NoteSeven;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
    public function index(Request $request)
    {
        $settings = Setting::all();
        session(['periodNote' => 1]);

        if (!empty($request->filter_period)) {
            $period = $request->session()->put('periodNote', $request->filter_period);
            $noteSevens = NoteSeven::with('user')
                ->where('setting_id', '=', $request->filter_period)
                ->get();
        } else {
            $noteSevens = NoteSeven::with('user')
                ->where('setting_id', '=', 1)
                ->get();
        }

        return view('dashboard.note.tatanan7.index', compact('settings'));
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
        $period = $request->session()->get('periodNote', 1);
        $year = Setting::where('id', '=', $period)->first();
        $no = Str::remove('p', $noteSeven->code);

        $request->validate([
            'note' => 'string'
        ]);

        $noteSeven->note = $request->input('note');
        $noteSeven->save();

        return redirect()->route('noteSeven.index')
            ->with('success', 'Catatan pertanyaan No. ' . $no . ' tahun periode ' . $year->period . ' berhasil disimpan.');
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
            if (!empty($request->filter_period)) {
                $period = $request->session()->put('periodNote', $request->filter_period);
                $noteSevens = noteSeven::with('user')
                    ->where('setting_id', '=', $request->filter_period)
                    ->get();
            } else {
                $noteSevens = noteSeven::with('user')
                    ->where('setting_id', '=', 1)
                    ->get();
            }

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
