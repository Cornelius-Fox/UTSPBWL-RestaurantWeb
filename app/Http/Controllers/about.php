<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class about extends Controller
{
    public function index()
    {
        return view('about');
    }
}
