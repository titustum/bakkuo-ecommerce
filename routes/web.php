<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'homepage');
Route::view('/products', 'products');
Route::view('/single-product', 'single-product');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
