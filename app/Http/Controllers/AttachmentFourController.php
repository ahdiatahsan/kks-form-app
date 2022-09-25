<?php

namespace App\Http\Controllers;

use App\Models\AttachmentFour;
use App\Http\Requests\StoreAttachmentFourRequest;
use App\Http\Requests\UpdateAttachmentFourRequest;

class AttachmentFourController extends Controller
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
     * @param  \App\Http\Requests\StoreAttachmentFourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttachmentFourRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttachmentFour  $attachmentFour
     * @return \Illuminate\Http\Response
     */
    public function show(AttachmentFour $attachmentFour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttachmentFour  $attachmentFour
     * @return \Illuminate\Http\Response
     */
    public function edit(AttachmentFour $attachmentFour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttachmentFourRequest  $request
     * @param  \App\Models\AttachmentFour  $attachmentFour
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttachmentFourRequest $request, AttachmentFour $attachmentFour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttachmentFour  $attachmentFour
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttachmentFour $attachmentFour)
    {
        //
    }
}
