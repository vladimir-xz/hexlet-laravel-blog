<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('', [PageController::class, 'welcome']);
Route::get('about', [PageController::class, 'about']);
