<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth']], function () {

    Route::middleware(['role:petugas|admin'])->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\Web\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::resource('team', \App\Http\Controllers\Web\Admin\TeamController::class);
    });

    Route::middleware(['role:admin'])->group(function () {
        Route::get('/website-configuration', [\App\Http\Controllers\Web\Admin\WebConfigurationController::class, 'index'])->name('website-configuration.index');
        Route::put('/website-configuration/{id}', [\App\Http\Controllers\Web\Admin\WebConfigurationController::class, 'update'])->name('website-configuration.update');

        Route::resource('competition', \App\Http\Controllers\Web\Admin\CompetitionController::class);
        Route::resource('timeline', \App\Http\Controllers\Web\Admin\TimelineController::class);
        Route::resource('payment-method', \App\Http\Controllers\Web\Admin\PaymentMethodController::class);
        Route::resource('sponsor', \App\Http\Controllers\Web\Admin\SponsorController::class);
        Route::resource('media-partner', \App\Http\Controllers\Web\Admin\MediaPartnerController::class);
        Route::resource('work', \App\Http\Controllers\Web\Admin\WorkController::class);
    });
});
