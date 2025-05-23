<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Authentication
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('home');
})->middleware('auth')->name('home'); // <-- Tambahkan middleware auth di sini