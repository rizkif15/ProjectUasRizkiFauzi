<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('posts.landingPage');
});

Route::resource('/posts', PostController::class);