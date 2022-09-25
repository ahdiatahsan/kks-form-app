<?php

namespace App\Http\Controllers;

use App\Models\AttachmentNine;
use App\Http\Requests\StoreAttachmentNineRequest;
use App\Http\Requests\UpdateAttachmentNineRequest;

class AttachmentNineController extends Controller
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
     * @param  \App\Http\Requests\StoreAttachmentNineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttachmentNineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttachmentNine  $attachmentNine
     * @return \Illuminate\Http\Response
     */
    public function show(AttachmentNine $attachmentNine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttachmentNine  $attachmentNine
     * @return \Illuminate\Http\Response
     */
    public function edit(AttachmentNine $attachmentNine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttachmentNineRequest  $request
     * @param  \App\Models\AttachmentNine  $attachmentNine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttachmentNineRequest $request, AttachmentNine $attachmentNine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttachmentNine  $attachmentNine
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttachmentNine $attachmentNine)
    {
        //
    }
}
