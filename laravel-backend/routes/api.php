<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;

// Public auth routes
Route::post('/login',  [AuthController::class, 'login']);

// Protected routes — require valid Sanctum token
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me',        [AuthController::class,     'me']);
    Route::post('/logout',   [AuthController::class,     'logout']);
    Route::get('/students',  [StudentController::class,  'index']);
    Route::get('/courses',   [CourseController::class,   'index']);
    Route::get('/dashboard', [DashboardController::class,'index']);
});