<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookingAPIController;


Route::get('/booking', [BookingAPIController::class, 'index']);
Route::get('/booking/{id}', [BookingAPIController::class, 'show']);
