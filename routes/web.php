<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Route Halaman Utama (Landing Page sesuai desain)
Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

// 2. Route Dashboard (Wajib ada agar tidak error module auth)
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 3. Route Auth bawaan (Login/Register)
// require __DIR__ . '/auth.php';
