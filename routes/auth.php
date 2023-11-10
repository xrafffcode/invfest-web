<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', [\App\Http\Controllers\Web\Auth\LoginController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\Web\Auth\LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [\App\Http\Controllers\Web\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/register', [\App\Http\Controllers\Web\Auth\RegisterController::class, 'index'])->name('register');
