<?php

namespace App\Http\Controllers;

use App\Models\TatananNote;
use App\Http\Requests\StoreTatananNoteRequest;
use App\Http\Requests\UpdateTatananNoteRequest;

class TatananNoteController extends Controller
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
        //
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
     * @param  \App\Http\Requests\StoreTatananNoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTatananNoteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TatananNote  $tatananNote
     * @return \Illuminate\Http\Response
     */
    public function show(TatananNote $tatananNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TatananNote  $tatananNote
     * @return \Illuminate\Http\Response
     */
    public function edit(TatananNote $tatananNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTatananNoteRequest  $request
     * @param  \App\Models\TatananNote  $tatananNote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTatananNoteRequest $request, TatananNote $tatananNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TatananNote  $tatananNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(TatananNote $tatananNote)
    {
        //
    }
}
