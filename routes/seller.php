<?php

use App\Http\Controllers\Seller\DashboardController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'verified', RoleMiddleware::class . ':seller'])->prefix('seller')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('seller.dashboard');

});