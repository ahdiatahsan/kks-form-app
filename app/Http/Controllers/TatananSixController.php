<?php

namespace App\Http\Controllers;

use App\Models\TatananSix;
use App\Models\AttachmentSix;
use App\Models\AttachmentSixNd;
use App\Models\NoteSix;
use App\Http\Requests\StoreTatananSixRequest;
use App\Http\Requests\UpdateTatananSixRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TatananSixController extends Controller
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

        $tatananSix = TatananSix::with('user')
            ->where('user_id', '=', Auth::user()->id)
            ->where('setting_id', '=', 1)
            ->first();
        $attachSix = AttachmentSix::with('user')
            ->where('user_id', '=', Auth::user()->id)
            ->where('setting_id', '=', 1)
            ->first();
        $attachSixNd = AttachmentSixNd::with('user')
            ->where('user_id', '=', Auth::user()->id)
            ->where('setting_id', '=', 1)
            ->first();

        return view('dashboard.indicator.tatanan6.index', compact('settings', 'tatananSix', 'attachSix', 'attachSixNd', 'period'));
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
            $tatananSix = TatananSix::with('user')
                ->where('user_id', '=', Auth::user()->id)
                ->where('setting_id', '=', $request->filter_period)
                ->first();
            $attachSix = AttachmentSix::with('user')
                ->where('user_id', '=', Auth::user()->id)
                ->where('setting_id', '=', $request->filter_period)
                ->first();
            $attachSixNd = AttachmentSixNd::with('user')
                ->where('user_id', '=', Auth::user()->id)
                ->where('setting_id', '=', $request->filter_period)
                ->first();
        } else {
            $tatananSix = TatananSix::with('user')
                ->where('user_id', '=', Auth::user()->id)
                ->where('setting_id', '=', 1)
                ->first();
            $attachSix = AttachmentSix::with('user')
                ->where('user_id', '=', Auth::user()->id)
                ->where('setting_id', '=', 1)
                ->first();
            $attachSixNd = AttachmentSixNd::with('user')
                ->where('user_id', '=', Auth::user()->id)
                ->where('setting_id', '=', 1)
                ->first();
        }

        return view('dashboard.indicator.tatanan6.index', compact('settings', 'tatananSix', 'attachSix', 'attachSixNd', 'period'));
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
     * @param  \App\Http\Requests\StoreTatananSixRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTatananSixRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TatananSix  $tatananSix
     * @return \Illuminate\Http\Response
     */
    public function show(TatananSix $tatananSix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TatananSix  $tatananSix
     * @return \Illuminate\Http\Response
     */
    public function edit(TatananSix $tatananSix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTatananSixRequest  $request
     * @param  \App\Models\TatananSix  $tatananSix
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TatananSix $tatananSix)
    {
        $period = $request->session()->get('period', 1);
        $year = Setting::where('id', '=', $period)->first();

        $attachSix = AttachmentSix::with('user')
            ->where('user_id', '=', Auth::user()->id)
            ->where('setting_id', '=', $period)
            ->first();
        $attachSixNd = AttachmentSixNd::with('user')
            ->where('user_id', '=', Auth::user()->id)
            ->where('setting_id', '=', $period)
            ->first();

        $num = 43;
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

                if (Storage::exists('public/attachmentSix/' . $attachSix->$converted)) {
                    Storage::delete('public/attachmentSix/' . $attachSix->$converted);
                }

                $attachFile = $request->file($field2);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Enam (' . $year->period . ') - ' . $field2 . '.' . $extension;
                Storage::putFileAs('public/attachmentSix', $attachFile, $attachName);

                $attachSix->update([
                    $converted => $attachName,
                ]);

                $noteSixPdf = NoteSix::where('code', '=', $converted)
                    ->where('setting_id', '=', $period)
                    ->first();
                $noteSixPdf->update([
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

                if (Storage::exists('public/attachmentSix/' . $attachSixNd->$converted)) {
                    Storage::delete('public/attachmentSix/' . $attachSixNd->$converted);
                }

                $attachFile = $request->file($field3);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Enam (' . $year->period . ') - ' . $field3 . '.' . $extension;
                Storage::putFileAs('public/attachmentSix', $attachFile, $attachName);

                $attachSixNd->update([
                    $converted => $attachName,
                ]);

                $noteSixImg = NoteSix::where('code', '=', $converted)
                    ->where('setting_id', '=', $period)
                    ->first();
                $noteSixImg->update([
                    'attachment_img' => $attachName,
                ]);
            }
        }

        foreach ($fieldNames1 as $field1) {
            if ($request->has($field1)) {
                $tatananSix->update([
                    $field1 => $request->input($field1),
                ]);

                $noteSixQa = NoteSix::where('code', '=', $field1)
                    ->where('setting_id', '=', $period)
                    ->first();
                $userId = Auth::user()->id;
                $answer = substr($request->input($field1), 0, 1);
                $score = substr($request->input($field1), 2, 4);

                $noteSixQa->update([
                    'answer' => $answer,
                    'score' => $score,
                    'user_id' => $userId,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Jawaban Anda Di Tatanan 6 Berhasil Disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TatananSix  $tatananSix
     * @return \Illuminate\Http\Response
     */
    public function destroy(TatananSix $tatananSix)
    {
        //
    }
}
