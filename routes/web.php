<?php

use App\Http\Controllers\Web\Frontend\CompetitionController;
use App\Http\Controllers\Web\Frontend\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('frontend.landing');
Route::get('/competition/{slug}', [CompetitionController::class, 'show'])->name('frontend.competition.show');
