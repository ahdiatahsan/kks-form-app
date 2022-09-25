<?php

namespace App\Http\Controllers;

use App\Models\InstitutionalVillage;
use App\Http\Requests\StoreInstitutionalVillageRequest;
use App\Http\Requests\UpdateInstitutionalVillageRequest;

class InstitutionalVillageController extends Controller
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
     * @param  \App\Http\Requests\StoreInstitutionalVillageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInstitutionalVillageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InstitutionalVillage  $institutionalVillage
     * @return \Illuminate\Http\Response
     */
    public function show(InstitutionalVillage $institutionalVillage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InstitutionalVillage  $institutionalVillage
     * @return \Illuminate\Http\Response
     */
    public function edit(InstitutionalVillage $institutionalVillage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInstitutionalVillageRequest  $request
     * @param  \App\Models\InstitutionalVillage  $institutionalVillage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInstitutionalVillageRequest $request, InstitutionalVillage $institutionalVillage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstitutionalVillage  $institutionalVillage
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstitutionalVillage $institutionalVillage)
    {
        //
    }
}
