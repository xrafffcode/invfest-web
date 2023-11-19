<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', [\App\Http\Controllers\Web\Auth\LoginController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\Web\Auth\LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [\App\Http\Controllers\Web\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/register', [\App\Http\Controllers\Web\Auth\RegisterController::class, 'index'])->name('register');
Route::post('/register', [\App\Http\Controllers\Web\Auth\RegisterController::class, 'register'])->name('register.store');

Route::get('/team-members', [\App\Http\Controllers\Web\Auth\RegisterController::class, 'teamMember'])->name('team-members');
Route::post('/team-members', [\App\Http\Controllers\Web\Auth\RegisterController::class, 'teamMemberStore'])->name('team-members.store');

Route::get('/payment-team', [\App\Http\Controllers\Web\Auth\RegisterController::class, 'payment'])->name('payment-team');
Route::post('/payment-team', [\App\Http\Controllers\Web\Auth\RegisterController::class, 'paymentStore'])->name('payment-team.store');

Route::get('/email/verify', [\App\Http\Controllers\Web\Auth\RegisterController::class, 'verification'])->name('verification');
Route::get('/email/verify/{id}/{hash}', [\App\Http\Controllers\Web\Auth\RegisterController::class, 'verificationVerify'])->name('verification.verify');
Route::post('/email/verification-check', [\App\Http\Controllers\Web\Auth\RegisterController::class, 'verificationStore'])->name('verification.send');
