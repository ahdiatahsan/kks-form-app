<?php

namespace App\Http\Controllers;

use App\Models\TatananSeven;
use App\Http\Requests\StoreTatananSevenRequest;
use App\Http\Requests\UpdateTatananSevenRequest;

class TatananSevenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tatanan7.index');
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
    public function update(UpdateTatananSevenRequest $request, TatananSeven $tatananSeven)
    {
        //
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
