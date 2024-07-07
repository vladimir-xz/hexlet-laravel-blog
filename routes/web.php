<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('', [PageController::class, 'welcome']);
Route::get('about', [PageController::class, 'about']);
Route::resource('articles', ArticleController::class);
