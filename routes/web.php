<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;


Route::get('/', [WebController::class, 'about']);
Route::get('/catalog', [ProductController::class, 'getAll']);

Route::get('/catalog/{product}', [ProductController::class, 'getOne']);