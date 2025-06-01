<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\BookingController;

// 🔹 Home
Route::get('/', [JadwalDokterController::class, 'index']);

// 🔹 Jadwal Dokter (Admin)
Route::resource('jadwals', JadwalDokterController::class); 
Route::get('/jadwals', [JadwalDokterController::class, 'index'])->name('jadwals.index');
Route::get('/jadwals/create', [JadwalDokterController::class, 'create'])->name('jadwals.create');
Route::post('/jadwals', [JadwalDokterController::class, 'store'])->name('jadwals.store');

// 🔹 Booking Kunjungan (Mahasiswa)
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');          
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');  
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');          
Route::get('/bookings/{booking}/edit', [BookingController::class, 'edit'])->name('bookings.edit'); 
Route::put('/bookings/{booking}', [BookingController::class, 'update'])->name('bookings.update');  
Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy'); 
=======

Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');          // Tampilkan daftar bookings
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');  // Form tambah booking
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');          // Simpan booking baru
Route::get('/bookings/{booking}/edit', [BookingController::class, 'edit'])->name('bookings.edit'); // Form edit booking
Route::put('/bookings/{booking}', [BookingController::class, 'update'])->name('bookings.update');  // Simpan perubahan
Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy'); // Hapus booking

