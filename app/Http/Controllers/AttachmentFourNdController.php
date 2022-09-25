<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttachmentFourNdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
