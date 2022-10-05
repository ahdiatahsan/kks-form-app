<?php

namespace App\Http\Controllers;

use App\Models\TatananNine;
use App\Models\AttachmentNine;
use App\Models\AttachmentNineNd;
use App\Models\NoteNine;
use App\Http\Requests\StoreTatananNineRequest;
use App\Http\Requests\UpdateTatananNineRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TatananNineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tatananNine = TatananNine::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachNine = AttachmentNine::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachNineNd = AttachmentNineNd::with('user')->where('user_id', '=', Auth::user()->id)->first();
        return view('dashboard.indicator.tatanan9.index', compact('tatananNine','attachNine','attachNineNd'));
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
     * @param  \App\Http\Requests\StoreTatananNineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTatananNineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TatananNine  $tatananNine
     * @return \Illuminate\Http\Response
     */
    public function show(TatananNine $tatananNine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TatananNine  $tatananNine
     * @return \Illuminate\Http\Response
     */
    public function edit(TatananNine $tatananNine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTatananNineRequest  $request
     * @param  \App\Models\TatananNine  $tatananNine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TatananNine $tatananNine)
    {
        $attachNine = AttachmentNine::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachNineNd = AttachmentNineNd::with('user')->where('user_id', '=', Auth::user()->id)->first();

        $num = 23;
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
                    $field2.'.mimes' => 'Lampiran harus berupa berkas berjenis: pdf.',
                    $field2.'.max' => 'Lampiran tidak boleh lebih besar dari 3 MB'
                ]);

                $converted = Str::remove('_1', $field2);

                if (Storage::exists('public/attachmentNine/' . $attachNine->$converted)) {
                    Storage::delete('public/attachmentNine/' . $attachNine->$converted);
                }

                $attachFile = $request->file($field2);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Sembilan - ' . $field2 . '.' . $extension;
                Storage::putFileAs('public/attachmentNine', $attachFile, $attachName);

                $attachNine->update([
                    $converted => $attachName,
                ]);

                $noteNinePdf = NoteNine::where('code', '=', $converted)->first();
                $noteNinePdf->update([
                    'attachment_pdf' => $attachName,
                ]);
            }
        }

        foreach ($fieldNames3 as $field3) {
            if ($request->hasFile($field3)) {
                $request->validate([
                    $field3 => 'required|file|max:2048|mimes:jpeg,jpg,png,webp'
                ], [
                    $field3.'.mimes' => 'Dokumentasi harus berupa berkas berjenis: jpeg, jpg, png, webp.',
                    $field3.'.max' => 'Dokumentasi tidak boleh lebih besar dari 2 MB'
                ]);

                $converted = Str::remove('_2', $field3);

                if (Storage::exists('public/attachmentNine/' . $attachNineNd->$converted)) {
                    Storage::delete('public/attachmentNine/' . $attachNineNd->$converted);
                }

                $attachFile = $request->file($field3);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Sembilan - ' . $field3 . '.' . $extension;
                Storage::putFileAs('public/attachmentNine', $attachFile, $attachName);

                $attachNineNd->update([
                    $converted => $attachName,
                ]);

                $noteNineImg = NoteNine::where('code', '=', $converted)->first();
                $noteNineImg->update([
                    'attachment_img' => $attachName,
                ]);
            }
        }

        foreach ($fieldNames1 as $field1) {
            if ($request->has($field1)) {
                $tatananNine->update([
                    $field1 => $request->input($field1),
                ]);

                $noteNineQa = NoteNine::where('code', '=', $field1)->first();
                $userId = Auth::user()->id;
                $answer = substr($request->input($field1), 0, 1);
                $score = substr($request->input($field1), 2, 4);

                $noteNineQa->update([
                    'answer' => $answer,
                    'score' => $score,
                    'user_id' => $userId,
                ]);
            }
        }

        return redirect()->route('tatananNine.index')->with('success', 'Jawaban Anda Di Tatanan 9 Berhasil Disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TatananNine  $tatananNine
     * @return \Illuminate\Http\Response
     */
    public function destroy(TatananNine $tatananNine)
    {
        //
    }
}
