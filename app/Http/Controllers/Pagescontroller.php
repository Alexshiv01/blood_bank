<?php

namespace App\Http\Controllers;

class Pagescontroller extends Controller
{
    //
    public function index()
    {

        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }
}
