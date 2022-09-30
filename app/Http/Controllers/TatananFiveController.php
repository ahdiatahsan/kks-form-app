<?php

namespace App\Http\Controllers;

use App\Models\TatananFive;
use App\Models\AttachmentFive;
use App\Models\AttachmentFiveNd;
use App\Http\Requests\StoreTatananFiveRequest;
use App\Http\Requests\UpdateTatananFiveRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TatananFiveController extends Controller
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
        $tatananFive = TatananFive::with('user')->where('user_id', '=', Auth::user()->id)->first();
        return view('dashboard.indicator.tatanan5.index', compact('tatananFive'));
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
     * @param  \App\Http\Requests\StoreTatananFiveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTatananFiveRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TatananFive  $tatananFive
     * @return \Illuminate\Http\Response
     */
    public function show(TatananFive $tatananFive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TatananFive  $tatananFive
     * @return \Illuminate\Http\Response
     */
    public function edit(TatananFive $tatananFive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTatananFiveRequest  $request
     * @param  \App\Models\TatananFive  $tatananFive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TatananFive $tatananFive)
    {
        $attachFive = AttachmentFive::with('user')->where('user_id', '=', Auth::user()->id)->first();
        $attachFiveNd = AttachmentFiveNd::with('user')->where('user_id', '=', Auth::user()->id)->first();

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

                if (Storage::exists('public/attachmentFive/' . $attachFive->$converted)) {
                    Storage::delete('public/attachmentFive/' . $attachFive->$converted);
                }

                $attachFile = $request->file($field2);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Lima - ' . $field2 . '.' . $extension;
                Storage::putFileAs('public/attachmentFive', $attachFile, $attachName);

                $attachFive->update([
                    $converted => $attachName,
                ]);
            }
        }

        foreach ($fieldNames3 as $field3) {
            if ($request->hasFile($field3)) {
                $request->validate([
                    $field3 => 'required|file|max:2048|mimes:jpeg,jpg,png,webp'
                ]);

                $converted = Str::remove('_2', $field3);

                if (Storage::exists('public/attachmentFive/' . $attachFiveNd->$converted)) {
                    Storage::delete('public/attachmentFive/' . $attachFiveNd->$converted);
                }

                $attachFile = $request->file($field3);
                $extension = $attachFile->extension();
                $attachName = 'Tatanan Lima - ' . $field3 . '.' . $extension;
                Storage::putFileAs('public/attachmentFive', $attachFile, $attachName);

                $attachFiveNd->update([
                    $converted => $attachName,
                ]);
            }
        }

        foreach ($fieldNames1 as $field1) {
            if ($request->has($field1)) {
                $tatananFive->update([
                    $field1 => $request->input($field1),
                ]);
            }
        }

        return redirect()->route('tatananFive.index')->with('success', 'Jawaban Anda Di Tatanan 5 Berhasil Disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TatananFive  $tatananFive
     * @return \Illuminate\Http\Response
     */
    public function destroy(TatananFive $tatananFive)
    {
        //
    }
}
