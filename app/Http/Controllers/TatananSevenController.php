<?php

namespace App\Http\Controllers;

use App\Models\TatananSeven;
use App\Models\AttachmentSeven;
use App\Models\AttachmentSevenNd;
use App\Http\Requests\StoreTatananSevenRequest;
use App\Http\Requests\UpdateTatananSevenRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TatananSevenController extends Controller
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
        $tatananSeven = TatananSeven::with('user')->where('user_id', '=', Auth::user()->id)->first();
        return view('dashboard.indicator.tatanan7.index', compact('tatananSeven'));
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
        $attachSeven = AttachmentSeven::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachSevenNd = AttachmentSevenNd::with('user')->where('user_id', '=', Auth::user()->id)->first();

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
                ]);

                $converted = Str::remove('_1', $field2);

                if (Storage::exists('public/attachmentSeven/' . $attachSeven->$converted)) {
                    Storage::delete('public/attachmentSeven/' . $attachSeven->$converted);
                }

                $attachFile = $request->file($field2);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Tujuh - ' . $field2 . '.' . $extension;
                Storage::putFileAs('public/attachmentSeven', $attachFile, $attachName);

                $attachSeven->update([
                    $converted => $attachName,
                ]);
            }
        }

        foreach ($fieldNames3 as $field3) {
            if ($request->hasFile($field3)) {
                $request->validate([
                    $field3 => 'required|file|max:3048|mimes:jpeg,jpg,png,webp'
                ]);

                $converted = Str::remove('_2', $field3);

                if (Storage::exists('public/attachmentSeven/' . $attachSevenNd->$converted)) {
                    Storage::delete('public/attachmentSeven/' . $attachSevenNd->$converted);
                }

                $attachFile = $request->file($field3);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Tujuh - ' . $field3 . '.' . $extension;
                Storage::putFileAs('public/attachmentSeven', $attachFile, $attachName);

                $attachSevenNd->update([
                    $converted => $attachName,
                ]);
            }
        }

        foreach ($fieldNames1 as $field1) {
            if ($request->has($field1)) {
                $tatananSeven->update([
                    $field1 => $request->input($field1),
                ]);
            }
        }

        return redirect()->route('tatananSeven.index')->with('success', 'Jawaban Anda Di Tatanan 7 Berhasil Disimpan.');
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
