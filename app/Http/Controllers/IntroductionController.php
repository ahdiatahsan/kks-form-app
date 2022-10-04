<?php

namespace App\Http\Controllers;

use App\Models\Introduction;
use App\Http\Requests\StoreIntroductionRequest;
use App\Http\Requests\UpdateIntroductionRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class IntroductionController extends Controller
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
        $introduction = Introduction::first();
        return view('dashboard.introduction.index', compact('introduction'));
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
     * @param  \App\Http\Requests\StoreIntroductionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIntroductionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function show(Introduction $introduction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function edit(Introduction $introduction)
    {
        return view('dashboard.introduction.edit', compact('introduction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIntroductionRequest  $request
     * @param  \App\Models\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Introduction $introduction)
    {
       if ($request->file() != null) {
            $request->validate([
                'attachment' => 'required|file|max:3048|mimes:pdf'
            ], [
                'attachment.mimes' => 'Berkas harus berupa file pdf.'
            ]);

            if (Storage::exists('public/introduction/' . $introduction->attachment)) {
                Storage::delete('public/introduction/' . $introduction->attachment);
            }

            $attachFile = $request->file('attachment');
            $extension = $attachFile->extension();
            $attachName = 'Pendahuluan KKS Enrekang ' . date('Y') . '.' . $extension;
            Storage::putFileAs('public/introduction', $attachFile, $attachName);

            $introduction->attachment = $attachName;
        }

        $introduction->body = $request->input('body');
        $introduction->save();

        return redirect()->route('introduction.edit', $introduction->id)->with('success', 'Data Pendahuluan Berhasil Disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Introduction $introduction)
    {
        //
    }
}
