<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $articlesUrl = action([ArticleController::class, 'index']);
        return view('welcome', compact('articlesUrl'));
    }

    public function about()
    {
        $articlesUrl = action([ArticleController::class, 'index']);
        return view('about', compact('articlesUrl'));
    }
}
