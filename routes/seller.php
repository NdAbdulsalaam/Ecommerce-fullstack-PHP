<?php

use App\Http\Controllers\Seller\DashboardController;
use App\Http\Controllers\Seller\UserProfileContoller;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'verified', RoleMiddleware::class . ':seller'])->prefix('seller')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('seller.dashboard');

    Route::get('users', [DashboardController::class, 'users'])
    ->name('seller.users');

    Route::get('users/{id}', [UserProfileContoller::class, 'view'])
    ->name('seller.view-user');

    Route::get('register', [UserProfileContoller::class, 'create'])
    ->name('seller.add-user');

    Route::post('register', [UserProfileContoller::class, 'store'])
    ->name('seller.add-user');

    Route::get('update/{id}', [UserProfileContoller::class, 'edit'])
    ->name('seller.update-user');

    Route::put('update/{id}', [UserProfileContoller::class, 'update'])
    ->name('seller.update-user');



});