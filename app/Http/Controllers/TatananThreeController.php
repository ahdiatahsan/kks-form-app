<?php

namespace App\Http\Controllers;

use App\Models\TatananThree;
use App\Models\AttachmentThree;
use App\Models\AttachmentThreeNd;
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
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tatananThree = TatananThree::with('user')->where('user_id', '=', Auth::user()->id)->first();
        return view('dashboard.indicator.tatanan3.index', compact('tatananThree'));
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
                    $field2 => 'nullable|file|max:3048|mimes:pdf'
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
            }
        }

        foreach ($fieldNames3 as $field3) {
            if ($request->hasFile($field3)) {
                $request->validate([
                    $field3 => 'nullable|file|max:3048|mimes:pdf'
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
            }
        }

        foreach ($fieldNames1 as $field1) {
            if ($request->has($field1)) {
                $tatananThree->update([
                    $field1 => $request->input($field1),
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
