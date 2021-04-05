<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $gdar = \App\Blood::all();
        return view('index', ['goldar' => $gdar]);
    }

    public function about()
    {
        return view('about', ['nama' => 'User']);
    }
}
