<?php

use App\Http\Controllers\Web\Team\DashboardController;
use App\Http\Controllers\Web\Team\TeamMemberController;
use App\Http\Controllers\Web\Team\WorkController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'role:team'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/karya', [WorkController::class, 'index'])->name('work');
    Route::post('/karya', [WorkController::class, 'store'])->name('work.store');
});
