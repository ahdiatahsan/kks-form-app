<?php

namespace App\Http\Controllers;

use App\Models\TatananTwo;
use App\Http\Requests\StoreTatananTwoRequest;
use App\Http\Requests\UpdateTatananTwoRequest;

class TatananTwoController extends Controller
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
        return view('dashboard.indicator.tatanan2.index');
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
     * @param  \App\Http\Requests\StoreTatananTwoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTatananTwoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TatananTwo  $tatananTwo
     * @return \Illuminate\Http\Response
     */
    public function show(TatananTwo $tatananTwo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TatananTwo  $tatananTwo
     * @return \Illuminate\Http\Response
     */
    public function edit(TatananTwo $tatananTwo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTatananTwoRequest  $request
     * @param  \App\Models\TatananTwo  $tatananTwo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTatananTwoRequest $request, TatananTwo $tatananTwo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TatananTwo  $tatananTwo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TatananTwo $tatananTwo)
    {
        //
    }
}
