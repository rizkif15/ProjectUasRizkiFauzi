<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('posts.landingPage');
});

Route::get('/posts/login', [PostController::class, 'login'])->name('posts.login');
Route::get('/posts/register', [PostController::class, 'register'])->name('posts.register');
Route::get('welcome', [PostController::class, 'welcome'])->name('welcome');

Route::resource('/posts', PostController::class);