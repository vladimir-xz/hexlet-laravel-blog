<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('', [PageController::class, 'welcome']);
Route::get('about', [PageController::class, 'about']);
Route::get('articles', [ArticleController::class, 'index'])
  ->name('articles.index');
