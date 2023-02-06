<?php

namespace App\Http\Controllers;

use App\Models\TatananSeven;
use App\Models\AttachmentSeven;
use App\Models\AttachmentSevenNd;
use App\Models\NoteSeven;
use App\Http\Requests\StoreTatananSevenRequest;
use App\Http\Requests\UpdateTatananSevenRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TatananSevenController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:tatanan-view'])->only(['index', 'show']);
        $this->middleware(['permission:tatanan-create'])->only(['create', 'store']);
        $this->middleware(['permission:tatanan-update'])->only(['edit', 'update']);
        $this->middleware(['permission:tatanan-delete'])->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();
        $period = Setting::where('id', '=', 1)->first();

        session(['period' => 1]);

        $tatananSeven = TatananSeven::with('user')
            ->where('user_id', '=', Auth::user()->id)
            ->where('setting_id', '=', 1)
            ->first();
        $attachSeven = AttachmentSeven::with('user')
            ->where('user_id', '=', Auth::user()->id)
            ->where('setting_id', '=', 1)
            ->first();
        $attachSevenNd = AttachmentSevenNd::with('user')
            ->where('user_id', '=', Auth::user()->id)
            ->where('setting_id', '=', 1)
            ->first();

        return view('dashboard.indicator.tatanan7.index', compact('settings', 'tatananSeven', 'attachSeven', 'attachSevenNd', 'period'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tatanan_filter(Request $request)
    {
        $settings = Setting::all();
        $period = Setting::where('id', '=', $request->filter_period)->first();

        session(['period' => $period->id]);

        if (!empty($request->filter_period)) {
            $tatananSeven = TatananSeven::with('user')
                ->where('user_id', '=', Auth::user()->id)
                ->where('setting_id', '=', $request->filter_period)
                ->first();
            $attachSeven = AttachmentSeven::with('user')
                ->where('user_id', '=', Auth::user()->id)
                ->where('setting_id', '=', $request->filter_period)
                ->first();
            $attachSevenNd = AttachmentSevenNd::with('user')
                ->where('user_id', '=', Auth::user()->id)
                ->where('setting_id', '=', $request->filter_period)
                ->first();
        } else {
            $tatananSeven = TatananSeven::with('user')
                ->where('user_id', '=', Auth::user()->id)
                ->where('setting_id', '=', 1)
                ->first();
            $attachSeven = AttachmentSeven::with('user')
                ->where('user_id', '=', Auth::user()->id)
                ->where('setting_id', '=', 1)
                ->first();
            $attachSevenNd = AttachmentSevenNd::with('user')
                ->where('user_id', '=', Auth::user()->id)
                ->where('setting_id', '=', 1)
                ->first();
        }

        return view('dashboard.indicator.tatanan7.index', compact('settings', 'tatananSeven', 'attachSeven', 'attachSevenNd', 'period'));
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
     * @param  \App\Http\Requests\StoreTatananSevenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTatananSevenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TatananSeven  $tatananSeven
     * @return \Illuminate\Http\Response
     */
    public function show(TatananSeven $tatananSeven)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TatananSeven  $tatananSeven
     * @return \Illuminate\Http\Response
     */
    public function edit(TatananSeven $tatananSeven)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTatananSevenRequest  $request
     * @param  \App\Models\TatananSeven  $tatananSeven
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TatananSeven $tatananSeven)
    {
        $period = $request->session()->get('period', 1);
        $year = Setting::where('id', '=', $period)->first();

        $attachSeven = AttachmentSeven::with('user')
            ->where('user_id', '=', Auth::user()->id)
            ->where('setting_id', '=', $period)
            ->first();
        $attachSevenNd = AttachmentSevenNd::with('user')
            ->where('user_id', '=', Auth::user()->id)
            ->where('setting_id', '=', $period)
            ->first();

        $num = 21;
        for ($i = 1; $i <= $num; ++$i) {
            $fieldNames1[] = 'p' . $i;
            $fieldNames2[] = 'p' . $i . '_1';
            $fieldNames3[] = 'p' . $i . '_2';
        }

        foreach ($fieldNames2 as $field2) {
            if ($request->hasFile($field2)) {
                $request->validate([
                    $field2 => 'required|file|max:3048|mimes:pdf'
                ], [
                    $field2 . '.mimes' => 'Lampiran harus berupa berkas berjenis: pdf.',
                    $field2 . '.max' => 'Lampiran tidak boleh lebih besar dari 3 MB'
                ]);

                $converted = Str::remove('_1', $field2);

                if (Storage::exists('public/attachmentSeven/' . $attachSeven->$converted)) {
                    Storage::delete('public/attachmentSeven/' . $attachSeven->$converted);
                }

                $attachFile = $request->file($field2);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Tujuh (' . $year->period . ') - ' . $field2 . '.' . $extension;
                Storage::putFileAs('public/attachmentSeven', $attachFile, $attachName);

                $attachSeven->update([
                    $converted => $attachName,
                ]);

                $noteSevenPdf = NoteSeven::where('code', '=', $converted)
                    ->where('setting_id', '=', $period)
                    ->first();
                $noteSevenPdf->update([
                    'attachment_pdf' => $attachName,
                ]);
            }
        }

        foreach ($fieldNames3 as $field3) {
            if ($request->hasFile($field3)) {
                $request->validate([
                    $field3 => 'required|file|max:2048|mimes:jpeg,jpg,png,webp'
                ], [
                    $field3 . '.mimes' => 'Dokumentasi harus berupa berkas berjenis: jpeg, jpg, png, webp.',
                    $field3 . '.max' => 'Dokumentasi tidak boleh lebih besar dari 2 MB'
                ]);

                $converted = Str::remove('_2', $field3);

                if (Storage::exists('public/attachmentSeven/' . $attachSevenNd->$converted)) {
                    Storage::delete('public/attachmentSeven/' . $attachSevenNd->$converted);
                }

                $attachFile = $request->file($field3);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Tujuh (' . $year->period . ') - ' . $field3 . '.' . $extension;
                Storage::putFileAs('public/attachmentSeven', $attachFile, $attachName);

                $attachSevenNd->update([
                    $converted => $attachName,
                ]);

                $noteSevenImg = NoteSeven::where('code', '=', $converted)
                    ->where('setting_id', '=', $period)
                    ->first();
                $noteSevenImg->update([
                    'attachment_img' => $attachName,
                ]);
            }
        }

        foreach ($fieldNames1 as $field1) {
            if ($request->has($field1)) {
                $tatananSeven->update([
                    $field1 => $request->input($field1),
                ]);

                $noteSevenQa = NoteSeven::where('code', '=', $field1)
                    ->where('setting_id', '=', $period)
                    ->first();
                $userId = Auth::user()->id;
                $answer = substr($request->input($field1), 0, 1);
                $score = substr($request->input($field1), 2, 4);

                $noteSevenQa->update([
                    'answer' => $answer,
                    'score' => $score,
                    'user_id' => $userId,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Jawaban Anda Di Tatanan 7 Berhasil Disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TatananSeven  $tatananSeven
     * @return \Illuminate\Http\Response
     */
    public function destroy(TatananSeven $tatananSeven)
    {
        //
    }
}
