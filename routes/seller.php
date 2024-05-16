<?php

use App\Http\Controllers\Seller\DashboardController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'verified', RoleMiddleware::class . ':seller'])->prefix('seller')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('seller.dashboard');

    Route::get('users', [DashboardController::class, 'users'])
    ->name('seller.users');

    Route::get('users/{username}', [DashboardController::class, 'view-user'])
    ->name('seller.view-user');

});