<?php

namespace App\Http\Controllers;

use App\Models\TatananThree;
use App\Models\AttachmentThree;
use App\Models\AttachmentThreeNd;
use App\Models\NoteThree;
use App\Http\Requests\StoreTatananThreeRequest;
use App\Http\Requests\UpdateTatananThreeRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TatananThreeController extends Controller
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
        $tatananThree = TatananThree::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachThree = AttachmentThree::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachThreeNd = AttachmentThreeNd::with('user')->where('user_id', '=', Auth::user()->id)->first();
        return view('dashboard.indicator.tatanan3.index', compact('tatananThree','attachThree','attachThreeNd'));
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
     * @param  \App\Http\Requests\StoreTatananThreeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTatananThreeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TatananThree  $tatananThree
     * @return \Illuminate\Http\Response
     */
    public function show(TatananThree $tatananThree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TatananThree  $tatananThree
     * @return \Illuminate\Http\Response
     */
    public function edit(TatananThree $tatananThree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTatananThreeRequest  $request
     * @param  \App\Models\TatananThree  $tatananThree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TatananThree $tatananThree)
    {
        $attachThree = AttachmentThree::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachThreeNd = AttachmentThreeNd::with('user')->where('user_id', '=', Auth::user()->id)->first();

        $num = 18;
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

                if (Storage::exists('public/attachmentThree/' . $attachThree->$converted)) {
                    Storage::delete('public/attachmentThree/' . $attachThree->$converted);
                }

                $attachFile = $request->file($field2);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Tiga - ' . $field2 . '.' . $extension;
                Storage::putFileAs('public/attachmentThree', $attachFile, $attachName);

                $attachThree->update([
                    $converted => $attachName,
                ]);

                $noteThreePdf = NoteThree::where('code', '=', $converted)->first();
                $noteThreePdf->update([
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

                if (Storage::exists('public/attachmentThree/' . $attachThreeNd->$converted)) {
                    Storage::delete('public/attachmentThree/' . $attachThreeNd->$converted);
                }

                $attachFile = $request->file($field3);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Tiga - ' . $field3 . '.' . $extension;
                Storage::putFileAs('public/attachmentThree', $attachFile, $attachName);

                $attachThreeNd->update([
                    $converted => $attachName,
                ]);

                $noteThreeImg = NoteThree::where('code', '=', $converted)->first();
                $noteThreeImg->update([
                    'attachment_img' => $attachName,
                ]);
            }
        }

        foreach ($fieldNames1 as $field1) {
            if ($request->has($field1)) {
                $tatananThree->update([
                    $field1 => $request->input($field1),
                ]);

                $noteThreeQa = NoteThree::where('code', '=', $field1)->first();
                $userId = Auth::user()->id;
                $answer = substr($request->input($field1), 0, 1);
                $score = substr($request->input($field1), 2, 4);

                $noteThreeQa->update([
                    'answer' => $answer,
                    'score' => $score,
                    'user_id' => $userId,
                ]);
            }
        }

        return redirect()->route('tatananThree.index')->with('success', 'Jawaban Anda Di Tatanan 3 Berhasil Disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TatananThree  $tatananThree
     * @return \Illuminate\Http\Response
     */
    public function destroy(TatananThree $tatananThree)
    {
        //
    }
}
