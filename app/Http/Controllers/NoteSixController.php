<?php

namespace App\Http\Controllers;

use App\Models\NoteSix;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
    public function index(Request $request)
    {
        $settings = Setting::all();
        session(['periodNote' => 1]);

        if (!empty($request->filter_period)) {
            $period = $request->session()->put('periodNote', $request->filter_period);
            $noteSixs = NoteSix::with('user')
                ->where('setting_id', '=', $request->filter_period)
                ->get();
        } else {
            $noteSixs = NoteSix::with('user')
                ->where('setting_id', '=', 1)
                ->get();
        }

        return view('dashboard.note.tatanan6.index', compact('settings'));
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
        $period = $request->session()->get('periodNote', 1);
        $year = Setting::where('id', '=', $period)->first();
        $no = Str::remove('p', $noteSix->code);

        $request->validate([
            'note' => 'string'
        ]);

        $noteSix->note = $request->input('note');
        $noteSix->save();

        return redirect()->route('noteSix.index')
            ->with('success', 'Catatan pertanyaan No. ' . $no . ' tahun periode ' . $year->period . ' berhasil disimpan.');
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
            if (!empty($request->filter_period)) {
                $period = $request->session()->put('periodNote', $request->filter_period);
                $noteSixs = noteSix::with('user')
                    ->where('setting_id', '=', $request->filter_period)
                    ->get();
            } else {
                $noteSixs = noteSix::with('user')
                    ->where('setting_id', '=', 1)
                    ->get();
            }

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
