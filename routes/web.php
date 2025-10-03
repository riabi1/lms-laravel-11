<?php

use App\Http\Controllers\Frontend\InstructorDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\StudentDashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth', 'verified', 'check.role:student'], 'prefix' => 'student', 'as' => 'student'], function () {
    Route::get('dashboard', [StudentDashboardController::class, 'index'])->name('.dashboard');
});

Route::group(['middleware' => ['auth', 'verified', 'check.role:instructor'], 'prefix' => 'instructor', 'as' => 'instructor'], function () {
    Route::get('dashboard', [InstructorDashboardController::class, 'index'])->name('.dashboard');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
