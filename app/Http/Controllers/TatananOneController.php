<?php

namespace App\Http\Controllers;

use App\Models\TatananOne;
use App\Http\Requests\StoreTatananOneRequest;
use App\Http\Requests\UpdateTatananOneRequest;

class TatananOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.indicator.tatanan1.index');
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
     * @param  \App\Http\Requests\StoreTatananOneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTatananOneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TatananOne  $tatananOne
     * @return \Illuminate\Http\Response
     */
    public function show(TatananOne $tatananOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TatananOne  $tatananOne
     * @return \Illuminate\Http\Response
     */
    public function edit(TatananOne $tatananOne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTatananOneRequest  $request
     * @param  \App\Models\TatananOne  $tatananOne
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTatananOneRequest $request, TatananOne $tatananOne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TatananOne  $tatananOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(TatananOne $tatananOne)
    {
        //
    }
}
