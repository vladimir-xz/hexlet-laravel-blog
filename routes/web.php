<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('', [PageController::class, 'welcome']);
Route::get('about', [PageController::class, 'about']);
Route::get('articles', [ArticleController::class, 'index'])
    ->name('articles.index');
Route::get('articles/create', [ArticleController::class, 'create'])
    ->name('articles.create');
Route::get('articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');
Route::post('article', [ArticleController::class, 'store'])
    ->name('articles.store');
