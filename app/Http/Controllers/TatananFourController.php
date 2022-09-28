<?php

namespace App\Http\Controllers;

use App\Models\TatananFour;
use App\Models\AttachmentFour;
use App\Models\AttachmentFourNd;
use App\Http\Requests\StoreTatananFourRequest;
use App\Http\Requests\UpdateTatananFourRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TatananFourController extends Controller
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
        $tatananFour = TatananFour::with('user')->where('user_id', '=', Auth::user()->id)->first();
        return view('dashboard.indicator.tatanan4.index', compact('tatananFour'));
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
     * @param  \App\Http\Requests\StoreTatananFourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTatananFourRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TatananFour  $tatananFour
     * @return \Illuminate\Http\Response
     */
    public function show(TatananFour $tatananFour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TatananFour  $tatananFour
     * @return \Illuminate\Http\Response
     */
    public function edit(TatananFour $tatananFour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTatananFourRequest  $request
     * @param  \App\Models\TatananFour  $tatananFour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TatananFour $tatananFour)
    {
        $attachFour = AttachmentFour::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachFourNd = AttachmentFourNd::with('user')->where('user_id', '=', Auth::user()->id)->first();

        $num = 16;
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

                if (Storage::exists('public/attachmentFour/' . $attachFour->$converted)) {
                    Storage::delete('public/attachmentFour/' . $attachFour->$converted);
                }

                $attachFile = $request->file($field2);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Empat - ' . $field2 . '.' . $extension;
                Storage::putFileAs('public/attachmentFour', $attachFile, $attachName);

                $attachFour->update([
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

                if (Storage::exists('public/attachmentFour/' . $attachFourNd->$converted)) {
                    Storage::delete('public/attachmentFour/' . $attachFourNd->$converted);
                }

                $attachFile = $request->file($field3);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Empat - ' . $field3 . '.' . $extension;
                Storage::putFileAs('public/attachmentFour', $attachFile, $attachName);

                $attachFourNd->update([
                    $converted => $attachName,
                ]);
            }
        }

        foreach ($fieldNames1 as $field1) {
            $tatananFour->update([
                $field1 => $request->input($field1),
            ]);
        }

        return redirect()->route('tatananFour.index')->with('success', 'Jawaban Anda Di Tatanan 4 Berhasil Disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TatananFour  $tatananFour
     * @return \Illuminate\Http\Response
     */
    public function destroy(TatananFour $tatananFour)
    {
        //
    }
}
