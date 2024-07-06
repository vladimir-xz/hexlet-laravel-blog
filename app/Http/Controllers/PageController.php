<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome', compact('articlesUrl'));
    }

    public function about()
    {
        return view('about', compact('articlesUrl'));
    }
}
