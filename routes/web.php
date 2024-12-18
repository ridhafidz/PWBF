<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/venue', function () {
    return view('venues.index');
});

Route::get('/activity', function () {
    return view('activities.index');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
