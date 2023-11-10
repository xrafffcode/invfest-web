<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [\App\Http\Controllers\Web\Admin\DashboardController::class, 'index'])->name('dashboard');

Route::get('/website-configuration', [\App\Http\Controllers\Web\Admin\WebConfigurationController::class, 'index'])->name('website-configuration.index');
Route::put('/website-configuration/{id}', [\App\Http\Controllers\Web\Admin\WebConfigurationController::class, 'update'])->name('website-configuration.update');
