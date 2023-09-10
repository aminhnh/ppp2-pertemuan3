<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/user', [UserController::class, 'user_profile']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [PostController::class, 'user_profile']);

Route::resource('/user', UserController::class);