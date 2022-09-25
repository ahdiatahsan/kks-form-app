<?php

namespace App\Http\Controllers;

use App\Models\InstitutionalBuilder;
use App\Http\Requests\StoreInstitutionalBuilderRequest;
use App\Http\Requests\UpdateInstitutionalBuilderRequest;

class InstitutionalBuilderController extends Controller
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
     * @param  \App\Http\Requests\StoreInstitutionalBuilderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInstitutionalBuilderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InstitutionalBuilder  $institutionalBuilder
     * @return \Illuminate\Http\Response
     */
    public function show(InstitutionalBuilder $institutionalBuilder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InstitutionalBuilder  $institutionalBuilder
     * @return \Illuminate\Http\Response
     */
    public function edit(InstitutionalBuilder $institutionalBuilder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInstitutionalBuilderRequest  $request
     * @param  \App\Models\InstitutionalBuilder  $institutionalBuilder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInstitutionalBuilderRequest $request, InstitutionalBuilder $institutionalBuilder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstitutionalBuilder  $institutionalBuilder
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstitutionalBuilder $institutionalBuilder)
    {
        //
    }
}
