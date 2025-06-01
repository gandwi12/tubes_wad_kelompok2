<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\JadwalApiController;
use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\API\PemeriksaanApiController;

Route::get('/jadwal', [JadwalDokterController::class, 'index']);
Route::get('/jadwals/{id}', [JadwalDokterController::class, 'show']);
Route::get('/jadwals', [JadwalApiController::class, 'index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/riwayat-kunjungan', [PemeriksaanApiController::class, 'index']); // Mahasiswa
    Route::get('/riwayat-kunjungan/{id}', [PemeriksaanApiController::class, 'show']); // Mahasiswa
    Route::put('/diagnosa/{id}', [PemeriksaanApiController::class, 'update']); // Dokter
});
