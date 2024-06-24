<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('layouts.landingPage');
});

Route::get('/posts/login', [PostController::class, 'login'])->name('posts.login');
Route::get('/posts/register', [PostController::class, 'register'])->name('posts.register');
Route::get('welcome', [PostController::class, 'welcome'])->name('welcome');

Route::get('/layouts/home', [PostController::class, 'home'])->name('layouts.home');
Route::get('/posts/edit', [PostController::class, 'edit'])->name('layouts.edit');
Route::get('/posts/show', [PostController::class, 'show'])->name('layouts.show');

Route::resource('/posts', PostController::class);