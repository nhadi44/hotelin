<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('landing_page');

Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware(['auth', 'customer']);

Route::get('/dashboard', function () {
    echo "ini halaman dashboard";
})->name('dashboard')->middleware(['auth', 'administrator']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
