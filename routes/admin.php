<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/dashboard', [\App\Http\Controllers\Web\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::get('/website-configuration', [\App\Http\Controllers\Web\Admin\WebConfigurationController::class, 'index'])->name('website-configuration.index');
    Route::put('/website-configuration/{id}', [\App\Http\Controllers\Web\Admin\WebConfigurationController::class, 'update'])->name('website-configuration.update');

    Route::resource('competition', \App\Http\Controllers\Web\Admin\CompetitionController::class);
    Route::resource('payment-method', \App\Http\Controllers\Web\Admin\PaymentMethodController::class);
    Route::resource('sponsor', \App\Http\Controllers\Web\Admin\SponsorController::class);
});
