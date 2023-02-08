<?php

namespace App\Http\Controllers;

use App\Models\NoteFive;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
    public function index(Request $request)
    {
        $settings = Setting::all();
        session(['periodNote' => 1]);

        if (!empty($request->filter_period)) {
            $period = $request->session()->put('periodNote', $request->filter_period);
            $noteFives = NoteFive::with('user')
                ->where('setting_id', '=', $request->filter_period)
                ->get();
        } else {
            $noteFives = NoteFive::with('user')
                ->where('setting_id', '=', 1)
                ->get();
        }

        return view('dashboard.note.tatanan5.index', compact('settings'));
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
        $period = $request->session()->get('periodNote', 1);
        $year = Setting::where('id', '=', $period)->first();
        $no = Str::remove('p', $noteFive->code);

        $request->validate([
            'note' => 'string'
        ]);

        $noteFive->note = $request->input('note');
        $noteFive->save();

        return redirect()->route('noteFive.index')
            ->with('success', 'Catatan pertanyaan No. ' . $no . ' tahun periode ' . $year->period . ' berhasil disimpan.');
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
            if (!empty($request->filter_period)) {
                $period = $request->session()->put('periodNote', $request->filter_period);
                $noteFives = noteFive::with('user')
                    ->where('setting_id', '=', $request->filter_period)
                    ->get();
            } else {
                $noteFives = noteFive::with('user')
                    ->where('setting_id', '=', 1)
                    ->get();
            }

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
