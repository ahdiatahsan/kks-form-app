<?php

namespace App\Http\Controllers;

use App\Models\InstitutionalKks;
use App\Http\Requests\StoreInstitutionalKksRequest;
use App\Http\Requests\UpdateInstitutionalKksRequest;

class InstitutionalKksController extends Controller
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
     * @param  \App\Http\Requests\StoreInstitutionalKksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInstitutionalKksRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InstitutionalKks  $institutionalKks
     * @return \Illuminate\Http\Response
     */
    public function show(InstitutionalKks $institutionalKks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InstitutionalKks  $institutionalKks
     * @return \Illuminate\Http\Response
     */
    public function edit(InstitutionalKks $institutionalKks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInstitutionalKksRequest  $request
     * @param  \App\Models\InstitutionalKks  $institutionalKks
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInstitutionalKksRequest $request, InstitutionalKks $institutionalKks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstitutionalKks  $institutionalKks
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstitutionalKks $institutionalKks)
    {
        //
    }
}
