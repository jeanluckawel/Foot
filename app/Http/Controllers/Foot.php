<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Foot extends Controller
{
    public function index()
    {
        $foots = \App\Models\Foot::all();
        return view('pages.blog', compact('foots'));
    }
}
