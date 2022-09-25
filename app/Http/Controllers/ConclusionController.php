<?php

namespace App\Http\Controllers;

use App\Models\Conclusion;
use App\Http\Requests\StoreConclusionRequest;
use App\Http\Requests\UpdateConclusionRequest;

class ConclusionController extends Controller
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
     * @param  \App\Http\Requests\StoreConclusionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConclusionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conclusion  $conclusion
     * @return \Illuminate\Http\Response
     */
    public function show(Conclusion $conclusion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conclusion  $conclusion
     * @return \Illuminate\Http\Response
     */
    public function edit(Conclusion $conclusion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConclusionRequest  $request
     * @param  \App\Models\Conclusion  $conclusion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConclusionRequest $request, Conclusion $conclusion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conclusion  $conclusion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conclusion $conclusion)
    {
        //
    }
}
