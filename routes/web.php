<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// This replaces the 'welcome' view with your movie controller
Route::get('/', [ProductController::class, 'index']);

// You can keep this as a backup or remove it
Route::get('/movies', [ProductController::class, 'index']);