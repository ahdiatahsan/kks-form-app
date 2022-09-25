<?php

namespace App\Http\Controllers;

use App\Models\TatananNine;
use App\Http\Requests\StoreTatananNineRequest;
use App\Http\Requests\UpdateTatananNineRequest;

class TatananNineController extends Controller
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
        return view('dashboard.indicator.tatanan9.index');
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
     * @param  \App\Http\Requests\StoreTatananNineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTatananNineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TatananNine  $tatananNine
     * @return \Illuminate\Http\Response
     */
    public function show(TatananNine $tatananNine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TatananNine  $tatananNine
     * @return \Illuminate\Http\Response
     */
    public function edit(TatananNine $tatananNine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTatananNineRequest  $request
     * @param  \App\Models\TatananNine  $tatananNine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTatananNineRequest $request, TatananNine $tatananNine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TatananNine  $tatananNine
     * @return \Illuminate\Http\Response
     */
    public function destroy(TatananNine $tatananNine)
    {
        //
    }
}
