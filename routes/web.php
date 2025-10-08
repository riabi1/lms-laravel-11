<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\InstructorDashboardController;
use App\Http\Controllers\Frontend\StudentDashboardController;
use Illuminate\Support\Facades\Route;

/**
 * Frontend Routes
 */
Route::get('/', [FrontendController::class, 'index'])->name('home');

/**
 * Dashboard Routes (Protected by Authentication and Role Middleware)
 */
Route::group(['middleware' => ['auth', 'verified', 'check.role:student'], 'prefix' => 'student', 'as' => 'student'], function () {
    Route::get('dashboard', [StudentDashboardController::class, 'index'])->name('.dashboard');
});

Route::group(['middleware' => ['auth', 'verified', 'check.role:instructor'], 'prefix' => 'instructor', 'as' => 'instructor'], function () {
    Route::get('dashboard', [InstructorDashboardController::class, 'index'])->name('.dashboard');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
