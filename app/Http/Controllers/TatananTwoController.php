<?php

namespace App\Http\Controllers;

use App\Models\TatananTwo;
use App\Models\AttachmentTwo;
use App\Models\AttachmentTwoNd;
use App\Http\Requests\StoreTatananTwoRequest;
use App\Http\Requests\UpdateTatananTwoRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TatananTwoController extends Controller
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
        $tatananTwo = TatananTwo::with('user')->where('user_id', '=', Auth::user()->id)->first();
        return view('dashboard.indicator.tatanan2.index', compact('tatananTwo'));
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
     * @param  \App\Http\Requests\StoreTatananTwoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTatananTwoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TatananTwo  $tatananTwo
     * @return \Illuminate\Http\Response
     */
    public function show(TatananTwo $tatananTwo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TatananTwo  $tatananTwo
     * @return \Illuminate\Http\Response
     */
    public function edit(TatananTwo $tatananTwo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTatananTwoRequest  $request
     * @param  \App\Models\TatananTwo  $tatananTwo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TatananTwo $tatananTwo)
    {
        $attachTwo = AttachmentTwo::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachTwoNd = AttachmentTwoNd::with('user')->where('user_id', '=', Auth::user()->id)->first();

        $num = 99;
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

                if (Storage::exists('public/attachmentTwo/' . $attachTwo->$converted)) {
                    Storage::delete('public/attachmentTwo/' . $attachTwo->$converted);
                }

                $attachFile = $request->file($field2);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Dua - ' . $field2 . '.' . $extension;
                Storage::putFileAs('public/attachmentTwo', $attachFile, $attachName);

                $attachTwo->update([
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

                if (Storage::exists('public/attachmentTwo/' . $attachTwoNd->$converted)) {
                    Storage::delete('public/attachmentTwo/' . $attachTwoNd->$converted);
                }

                $attachFile = $request->file($field3);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Dua - ' . $field3 . '.' . $extension;
                Storage::putFileAs('public/attachmentTwo', $attachFile, $attachName);

                $attachTwoNd->update([
                    $converted => $attachName,
                ]);
            }
        }

        foreach ($fieldNames1 as $field1) {
            $tatananTwo->update([
                $field1 => $request->input($field1),
            ]);
        }

        return redirect()->route('tatananTwo.index')->with('success', 'Jawaban Anda Di Tatanan 2 Berhasil Disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TatananTwo  $tatananTwo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TatananTwo $tatananTwo)
    {
        //
    }
}
