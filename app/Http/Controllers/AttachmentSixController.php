<?php

namespace App\Http\Controllers;

use App\Models\AttachmentSix;
use App\Http\Requests\StoreAttachmentSixRequest;
use App\Http\Requests\UpdateAttachmentSixRequest;

class AttachmentSixController extends Controller
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
     * @param  \App\Http\Requests\StoreAttachmentSixRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttachmentSixRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttachmentSix  $attachmentSix
     * @return \Illuminate\Http\Response
     */
    public function show(AttachmentSix $attachmentSix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttachmentSix  $attachmentSix
     * @return \Illuminate\Http\Response
     */
    public function edit(AttachmentSix $attachmentSix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttachmentSixRequest  $request
     * @param  \App\Models\AttachmentSix  $attachmentSix
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttachmentSixRequest $request, AttachmentSix $attachmentSix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttachmentSix  $attachmentSix
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttachmentSix $attachmentSix)
    {
        //
    }
}
