<?php

namespace App\Http\Controllers;

use App\Models\TatananOne;
use App\Models\AttachmentOne;
use App\Models\AttachmentOneNd;
use App\Models\NoteOne;
use App\Http\Requests\StoreTatananOneRequest;
use App\Http\Requests\UpdateTatananOneRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TatananOneController extends Controller
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
        $tatananOne = TatananOne::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachOne = AttachmentOne::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachOneNd = AttachmentOneNd::with('user')->where('user_id', '=', Auth::user()->id)->first();
        return view('dashboard.indicator.tatanan1.index', compact('tatananOne','attachOne','attachOneNd'));
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
     * @param  \App\Http\Requests\StoreTatananOneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTatananOneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TatananOne  $tatananOne
     * @return \Illuminate\Http\Response
     */
    public function show(TatananOne $tatananOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TatananOne  $tatananOne
     * @return \Illuminate\Http\Response
     */
    public function edit(TatananOne $tatananOne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTatananOneRequest  $request
     * @param  \App\Models\TatananOne  $tatananOne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TatananOne $tatananOne)
    {
        $attachOne = AttachmentOne::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachOneNd = AttachmentOneNd::with('user')->where('user_id', '=', Auth::user()->id)->first();

        $num = 68;
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
                    $field2.'.mimes' => 'Lampiran harus berupa berkas berjenis: pdf.'
                ]);

                $converted = Str::remove('_1', $field2);

                if (Storage::exists('public/attachmentOne/' . $attachOne->$converted)) {
                    Storage::delete('public/attachmentOne/' . $attachOne->$converted);
                }

                $attachFile = $request->file($field2);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Satu - ' . $field2 . '.' . $extension;
                Storage::putFileAs('public/attachmentOne', $attachFile, $attachName);

                $attachOne->update([
                    $converted => $attachName,
                ]);

                $noteOnePdf = NoteOne::where('code', '=', $converted)->first();
                $noteOnePdf->update([
                    'attachment_pdf' => $attachName,
                ]);
            }
        }

        foreach ($fieldNames3 as $field3) {
            if ($request->hasFile($field3)) {
                $request->validate([
                    $field3 => 'required|file|max:2048|mimes:jpeg,jpg,png,webp'
                ], [
                    $field3.'.mimes' => 'Dokumentasi harus berupa berkas berjenis: jpeg, jpg, png, webp.'
                ]);

                $converted = Str::remove('_2', $field3);

                if (Storage::exists('public/attachmentOne/' . $attachOneNd->$converted)) {
                    Storage::delete('public/attachmentOne/' . $attachOneNd->$converted);
                }

                $attachFile = $request->file($field3);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Satu - ' . $field3 . '.' . $extension;
                Storage::putFileAs('public/attachmentOne', $attachFile, $attachName);

                $attachOneNd->update([
                    $converted => $attachName,
                ]);

                $noteOneImg = NoteOne::where('code', '=', $converted)->first();
                $noteOneImg->update([
                    'attachment_img' => $attachName,
                ]);
            }
        }

        foreach ($fieldNames1 as $field1) {
            if ($request->has($field1)) {
                $tatananOne->update([
                    $field1 => $request->input($field1),
                ]);

                $noteOneQa = NoteOne::where('code', '=', $field1)->first();
                $userId = Auth::user()->id;
                $answer = substr($request->input($field1), 0, 1);
                $score = substr($request->input($field1), 2, 4);

                $noteOneQa->update([
                    'answer' => $answer,
                    'score' => $score,
                    'user_id' => $userId,
                ]);
            }
        }

        return redirect()->route('tatananOne.index')->with('success', 'Jawaban Anda Di Tatanan 1 Berhasil Disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TatananOne  $tatananOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(TatananOne $tatananOne)
    {
        //
    }
}
