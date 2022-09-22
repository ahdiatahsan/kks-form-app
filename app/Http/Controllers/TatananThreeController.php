<?php

namespace App\Http\Controllers;

use App\Models\TatananThree;
use App\Http\Requests\StoreTatananThreeRequest;
use App\Http\Requests\UpdateTatananThreeRequest;

class TatananThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.indicator.tatanan3.index');
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
    public function update(UpdateTatananThreeRequest $request, TatananThree $tatananThree)
    {
        //
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
