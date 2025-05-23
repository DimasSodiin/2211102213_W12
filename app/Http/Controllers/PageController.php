<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // Pastikan user terautentikasi
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You need to login first');
        }

        return view('home');
    }

    public function login()
    {
        // Redirect jika sudah login
        if (auth()->check()) {
            return redirect()->route('home');
        }

        return view('auth.login');
    }

    public function signup()
    {
        // Redirect jika sudah login
        if (auth()->check()) {
            return redirect()->route('home');
        }

        return view('auth.signup');
    }

    public function profile()
    {
        return view('profile');
    }
}