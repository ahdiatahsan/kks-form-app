<?php

namespace App\Http\Controllers;

use App\Models\TatananFive;
use App\Http\Requests\StoreTatananFiveRequest;
use App\Http\Requests\UpdateTatananFiveRequest;

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
        return view('dashboard.indicator.tatanan5.index');
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
    public function update(UpdateTatananFiveRequest $request, TatananFive $tatananFive)
    {
        //
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
