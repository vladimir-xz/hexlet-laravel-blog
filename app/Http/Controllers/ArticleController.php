<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(2);
        $articlesUrl = action([ArticleController::class, 'index']);

        return view('article.index', compact('articles', 'articlesUrl'));
    }
}
