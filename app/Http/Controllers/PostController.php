<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function landingPage(): View
    {
        //Kirim data post ke view
        return view('layouts.landingPage');
    }

    public function login(): View
    {
        //Kirim data post ke view
        return view('posts.login');
    }

    public function register(): View
    {
        //Kirim data post ke view
        return view('posts.register');
    }

    public function welcome(): View
    {
        //Kirim data post ke view
        return view('welcome');
    }

    public function home(): View
    {
        //Kirim data post ke view
        return view('layouts.home');
    }

    public function edit(): View
    {
        //Kirim data post ke view
        return view('posts.edit');
    }

    public function show(): View
    {
        //Kirim data post ke view
        return view('posts.show');
    }
}
