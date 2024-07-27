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
Route::get('/posts/show{code}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/add', [PostController::class, 'add'])->name('posts.add');
Route::get('/posts/edit{code}', [PostController::class, 'edit'])->name('posts.edit');

Route::resource('/posts', PostController::class);