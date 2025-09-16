<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

// Authentication Routes
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginUser']);
Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'registerUser']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes (only for logged-in users)
Route::middleware('auth')->group(function () {
    Route::resource('students', StudentController::class);
});
