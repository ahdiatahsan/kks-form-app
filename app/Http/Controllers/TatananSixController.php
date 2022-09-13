<?php

namespace App\Http\Controllers;

use App\Models\TatananSix;
use App\Http\Requests\StoreTatananSixRequest;
use App\Http\Requests\UpdateTatananSixRequest;

class TatananSixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tatanan6.index');
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
     * @param  \App\Http\Requests\StoreTatananSixRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTatananSixRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TatananSix  $tatananSix
     * @return \Illuminate\Http\Response
     */
    public function show(TatananSix $tatananSix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TatananSix  $tatananSix
     * @return \Illuminate\Http\Response
     */
    public function edit(TatananSix $tatananSix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTatananSixRequest  $request
     * @param  \App\Models\TatananSix  $tatananSix
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTatananSixRequest $request, TatananSix $tatananSix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TatananSix  $tatananSix
     * @return \Illuminate\Http\Response
     */
    public function destroy(TatananSix $tatananSix)
    {
        //
    }
}
