<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttachmentSevenNdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
