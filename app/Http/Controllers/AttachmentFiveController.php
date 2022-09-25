<?php

namespace App\Http\Controllers;

use App\Models\AttachmentFive;
use App\Http\Requests\StoreAttachmentFiveRequest;
use App\Http\Requests\UpdateAttachmentFiveRequest;

class AttachmentFiveController extends Controller
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
     * @param  \App\Http\Requests\StoreAttachmentFiveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttachmentFiveRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttachmentFive  $attachmentFive
     * @return \Illuminate\Http\Response
     */
    public function show(AttachmentFive $attachmentFive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttachmentFive  $attachmentFive
     * @return \Illuminate\Http\Response
     */
    public function edit(AttachmentFive $attachmentFive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttachmentFiveRequest  $request
     * @param  \App\Models\AttachmentFive  $attachmentFive
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttachmentFiveRequest $request, AttachmentFive $attachmentFive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttachmentFive  $attachmentFive
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttachmentFive $attachmentFive)
    {
        //
    }
}
