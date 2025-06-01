<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\JadwalApiController;
use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\API\BookingAPIController;

// 🔹 Jadwal Dokter
Route::get('/jadwal', [JadwalDokterController::class, 'index']);
Route::get('/jadwals', [JadwalApiController::class, 'index']);
Route::get('/jadwals/{id}', [JadwalDokterController::class, 'show']);

// 🔹 Booking Kunjungan
Route::get('/booking', [BookingAPIController::class, 'index']);
Route::get('/booking/{id}', [BookingAPIController::class, 'show']);

// 🔹 Pemeriksaan (HARUS LOGIN)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/riwayat-kunjungan', [PemeriksaanApiController::class, 'index']); // Mahasiswa
    Route::get('/riwayat-kunjungan/{id}', [PemeriksaanApiController::class, 'show']); // Mahasiswa
    Route::put('/diagnosa/{id}', [PemeriksaanApiController::class, 'update']); // Dokter
});

use App\Http\Controllers\Api\BookingAPIController;


Route::get('/booking', [BookingAPIController::class, 'index']);
Route::get('/booking/{id}', [BookingAPIController::class, 'show']);

