<?php

namespace App\Http\Controllers;

use App\Models\Conclusion;
use App\Http\Requests\StoreConclusionRequest;
use App\Http\Requests\UpdateConclusionRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ConclusionController extends Controller
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
        $conclusion = Conclusion::first();
        return view('dashboard.conclusion.index', compact('conclusion'));
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
     * @param  \App\Http\Requests\StoreConclusionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConclusionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conclusion  $conclusion
     * @return \Illuminate\Http\Response
     */
    public function show(Conclusion $conclusion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conclusion  $conclusion
     * @return \Illuminate\Http\Response
     */
    public function edit(Conclusion $conclusion)
    {
        return view('dashboard.conclusion.edit', compact('conclusion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConclusionRequest  $request
     * @param  \App\Models\Conclusion  $conclusion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conclusion $conclusion)
    {
        if ($request->file() != null) {
            $request->validate([
                'attachment' => 'required|file|max:3048|mimes:pdf'
            ], [
                'attachment.mimes' => 'Berkas harus berupa file pdf.',
                'attachment.max' => 'Berkas tidak boleh lebih besar dari 3 MB'
            ]);

            if (Storage::exists('public/conclusion/' . $conclusion->attachment)) {
                Storage::delete('public/conclusion/' . $conclusion->attachment);
            }

            $attachFile = $request->file('attachment');
            $extension = $attachFile->extension();
            $attachName = 'Penutup KKS Enrekang ' . date('Y') . '.' . $extension;
            Storage::putFileAs('public/conclusion', $attachFile, $attachName);

            $conclusion->attachment = $attachName;
        }

        $conclusion->body = $request->input('body');
        $conclusion->save();

        return redirect()->route('conclusion.edit', $conclusion->id)->with('success', 'Data Penutup Berhasil Disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conclusion  $conclusion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conclusion $conclusion)
    {
        //
    }
}
