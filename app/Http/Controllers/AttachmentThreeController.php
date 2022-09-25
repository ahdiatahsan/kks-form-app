<?php

namespace App\Http\Controllers;

use App\Models\AttachmentThree;
use App\Http\Requests\StoreAttachmentThreeRequest;
use App\Http\Requests\UpdateAttachmentThreeRequest;

class AttachmentThreeController extends Controller
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
     * @param  \App\Http\Requests\StoreAttachmentThreeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttachmentThreeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttachmentThree  $attachmentThree
     * @return \Illuminate\Http\Response
     */
    public function show(AttachmentThree $attachmentThree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttachmentThree  $attachmentThree
     * @return \Illuminate\Http\Response
     */
    public function edit(AttachmentThree $attachmentThree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttachmentThreeRequest  $request
     * @param  \App\Models\AttachmentThree  $attachmentThree
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttachmentThreeRequest $request, AttachmentThree $attachmentThree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttachmentThree  $attachmentThree
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttachmentThree $attachmentThree)
    {
        //
    }
}
