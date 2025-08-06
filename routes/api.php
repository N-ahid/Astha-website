<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceDetailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/login", [LoginController::class, "login"]);
Route::post("/contact", [ContactController::class, "create"]);

// Create a new service
Route::post('/services', [ServiceController::class, 'store']);

// Get all services
Route::get('/services', [ServiceController::class, 'index']);

// Get a single service
Route::get('/services/{service}', [ServiceController::class, 'show']);

// Update a service (use POST with _method=PUT for file uploads)
Route::post('/services/{service}', [ServiceController::class, 'update']);

// Delete a service
Route::delete('/services/{service}', [ServiceController::class, 'destroy']);



Route::get('/service-details', [ServiceDetailController::class, 'index']);
Route::get('/service-details/{id}', [ServiceDetailController::class, 'show']);
Route::post('/service-details', [ServiceDetailController::class, 'store']);
Route::post('/service-details/{id}', [ServiceDetailController::class, 'update']); // Use POST instead of PUT
Route::delete('/service-details/{id}', [ServiceDetailController::class, 'destroy']);



