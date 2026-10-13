<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirlineController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TravelController;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::get('/airlines', [AirlineController::class, 'index']);
Route::get('/airlines/{id}', [AirlineController::class, 'show']);
Route::post('/airlines', [AirlineController::class, 'store']);
Route::put('/airlines/{id}', [AirlineController::class, 'update']);
Route::delete('/airlines/{id}', [AirlineController::class, 'destroy']);

Route::get('/flights', [FlightController::class, 'index']);
Route::get('/flights/{id}', [FlightController::class, 'show']);
Route::post('/flights', [FlightController::class, 'store']);
Route::put('/flights/{id}', [FlightController::class, 'update']);
Route::delete('/flights/{id}', [FlightController::class, 'destroy']);

// Travel (összetett kulcs, két paraméter)
Route::get('/travel', [TravelController::class, 'index']);
Route::get('/travel/{user_id}/{flight_id}', [TravelController::class, 'show']);
Route::post('/travel', [TravelController::class, 'store']);
Route::put('/travel/{user_id}/{flight_id}', [TravelController::class, 'update']);
Route::delete('/travel/{user_id}/{flight_id}', [TravelController::class, 'destroy']);