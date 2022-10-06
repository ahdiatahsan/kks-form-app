<?php

namespace App\Http\Controllers;

use App\Models\TatananEight;
use App\Models\AttachmentEight;
use App\Models\AttachmentEightNd;
use App\Models\NoteEight;
use App\Http\Requests\StoreTatananEightRequest;
use App\Http\Requests\UpdateTatananEightRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TatananEightController extends Controller
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
        $tatananEight = TatananEight::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachEight = AttachmentEight::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachEightNd = AttachmentEightNd::with('user')->where('user_id', '=', Auth::user()->id)->first();
        return view('dashboard.indicator.tatanan8.index', compact('tatananEight','attachEight','attachEightNd'));
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
     * @param  \App\Http\Requests\StoreTatananEightRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTatananEightRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TatananEight  $tatananEight
     * @return \Illuminate\Http\Response
     */
    public function show(TatananEight $tatananEight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TatananEight  $tatananEight
     * @return \Illuminate\Http\Response
     */
    public function edit(TatananEight $tatananEight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTatananEightRequest  $request
     * @param  \App\Models\TatananEight  $tatananEight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TatananEight $tatananEight)
    {
        $attachEight = AttachmentEight::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachEightNd = AttachmentEightNd::with('user')->where('user_id', '=', Auth::user()->id)->first();

        $num = 34;
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

                if (Storage::exists('public/attachmentEight/' . $attachEight->$converted)) {
                    Storage::delete('public/attachmentEight/' . $attachEight->$converted);
                }

                $attachFile = $request->file($field2);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Delapan - ' . $field2 . '.' . $extension;
                Storage::putFileAs('public/attachmentEight', $attachFile, $attachName);

                $attachEight->update([
                    $converted => $attachName,
                ]);

                $noteEightPdf = NoteEight::where('code', '=', $converted)->first();
                $noteEightPdf->update([
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

                if (Storage::exists('public/attachmentEight/' . $attachEightNd->$converted)) {
                    Storage::delete('public/attachmentEight/' . $attachEightNd->$converted);
                }

                $attachFile = $request->file($field3);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Delapan - ' . $field3 . '.' . $extension;
                Storage::putFileAs('public/attachmentEight', $attachFile, $attachName);

                $attachEightNd->update([
                    $converted => $attachName,
                ]);

                $noteEightImg = NoteEight::where('code', '=', $converted)->first();
                $noteEightImg->update([
                    'attachment_img' => $attachName,
                ]);
            }
        }

        foreach ($fieldNames1 as $field1) {
            if ($request->has($field1)) {
                $tatananEight->update([
                    $field1 => $request->input($field1),
                ]);

                $noteEightQa = NoteEight::where('code', '=', $field1)->first();
                $userId = Auth::user()->id;
                $answer = substr($request->input($field1), 0, 1);
                $score = substr($request->input($field1), 2, 4);

                $noteEightQa->update([
                    'answer' => $answer,
                    'score' => $score,
                    'user_id' => $userId,
                ]);
            }
        }

        return redirect()->route('tatananEight.index')->with('success', 'Jawaban Anda Di Tatanan 8 Berhasil Disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TatananEight  $tatananEight
     * @return \Illuminate\Http\Response
     */
    public function destroy(TatananEight $tatananEight)
    {
        //
    }
}
