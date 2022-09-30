<?php

namespace App\Http\Controllers;

use App\Models\TatananSix;
use App\Models\AttachmentSix;
use App\Models\AttachmentSixNd;
use App\Http\Requests\StoreTatananSixRequest;
use App\Http\Requests\UpdateTatananSixRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TatananSixController extends Controller
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
        $tatananSix = TatananSix::with('user')->where('user_id', '=', Auth::user()->id)->first();
        return view('dashboard.indicator.tatanan6.index', compact('tatananSix'));
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
        $attachSix = AttachmentSix::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachSixNd = AttachmentSixNd::with('user')->where('user_id', '=', Auth::user()->id)->first();

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
                    $field2.'.mimes' => 'Lampiran harus berupa berkas berjenis: pdf.'
                ]);

                $converted = Str::remove('_1', $field2);

                if (Storage::exists('public/attachmentSix/' . $attachSix->$converted)) {
                    Storage::delete('public/attachmentSix/' . $attachSix->$converted);
                }

                $attachFile = $request->file($field2);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Enam - ' . $field2 . '.' . $extension;
                Storage::putFileAs('public/attachmentSix', $attachFile, $attachName);

                $attachSix->update([
                    $converted => $attachName,
                ]);
            }
        }

        foreach ($fieldNames3 as $field3) {
            if ($request->hasFile($field3)) {
                $request->validate([
                    $field3 => 'required|file|max:3048|mimes:jpeg,jpg,png,webp'
                ], [
                    $field3.'.mimes' => 'Dokumentasi harus berupa berkas berjenis: jpeg, jpg, png, webp.'
                ]);

                $converted = Str::remove('_2', $field3);

                if (Storage::exists('public/attachmentSix/' . $attachSixNd->$converted)) {
                    Storage::delete('public/attachmentSix/' . $attachSixNd->$converted);
                }

                $attachFile = $request->file($field3);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Enam - ' . $field3 . '.' . $extension;
                Storage::putFileAs('public/attachmentSix', $attachFile, $attachName);

                $attachSixNd->update([
                    $converted => $attachName,
                ]);
            }
        }

        foreach ($fieldNames1 as $field1) {
            if ($request->has($field1)) {
                $tatananSix->update([
                    $field1 => $request->input($field1),
                ]);
            }
        }

        return redirect()->route('tatananSix.index')->with('success', 'Jawaban Anda Di Tatanan 6 Berhasil Disimpan.');
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
