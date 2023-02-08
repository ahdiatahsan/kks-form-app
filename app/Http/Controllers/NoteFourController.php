<?php

namespace App\Http\Controllers;

use App\Models\NoteFour;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
    public function index(Request $request)
    {
        $settings = Setting::all();
        session(['periodNote' => 1]);

        if (!empty($request->filter_period)) {
            $period = $request->session()->put('periodNote', $request->filter_period);
            $noteFours = NoteFour::with('user')
                ->where('setting_id', '=', $request->filter_period)
                ->get();
        } else {
            $noteFours = NoteFour::with('user')
                ->where('setting_id', '=', 1)
                ->get();
        }

        return view('dashboard.note.tatanan4.index', compact('settings'));
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
        $period = $request->session()->get('periodNote', 1);
        $year = Setting::where('id', '=', $period)->first();
        $no = Str::remove('p', $noteFour->code);

        $request->validate([
            'note' => 'string'
        ]);

        $noteFour->note = $request->input('note');
        $noteFour->save();

        return redirect()->route('noteFour.index')
            ->with('success', 'Catatan pertanyaan No. ' . $no . ' tahun periode ' . $year->period . ' berhasil disimpan.');
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
            if (!empty($request->filter_period)) {
                $period = $request->session()->put('periodNote', $request->filter_period);
                $noteFours = noteFour::with('user')
                    ->where('setting_id', '=', $request->filter_period)
                    ->get();
            } else {
                $noteFours = noteFour::with('user')
                    ->where('setting_id', '=', 1)
                    ->get();
            }

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
