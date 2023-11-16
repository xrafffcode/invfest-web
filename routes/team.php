<?php

use App\Http\Controllers\Web\Team\DashboardController;
use App\Http\Controllers\Web\Team\TeamMemberController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'role:team'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
