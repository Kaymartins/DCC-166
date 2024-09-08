<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;


Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/bar-chart', [ChartController::class, 'barChart']);

require __DIR__.'/auth.php';
