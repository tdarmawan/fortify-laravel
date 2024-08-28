<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;


// Rute halaman utama dan default
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

// Rute untuk halaman login dengan Fortify
Fortify::loginView(function () {
    return view('auth.login');
});

// Rute untuk halaman two-factor-authentication (Pengaturan 2FA)
Route::get('/two-factor-authentication', function () {
    return view('auth.two-factor');
})->middleware(['auth', 'verified']);
