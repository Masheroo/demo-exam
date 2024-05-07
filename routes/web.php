<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;


Route::get('/', [WebController::class, 'about']);
Route::get('/catalog', [ProductController::class, 'getAll']);

Route::get('/catalog/{product}', [ProductController::class, 'getOne']);

Route::get('/register', [AuthController::class, 'regForm']);
Route::post('/register', [AuthController::class, 'registration']);

Route::get('/auth', [AuthController::class, 'authForm']);
Route::post('/auth', [AuthController::class, 'auth']);

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

