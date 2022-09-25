<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttachmentSixNdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
