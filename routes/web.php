<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');          // Tampilkan daftar bookings
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');  // Form tambah booking
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');          // Simpan booking baru
Route::get('/bookings/{booking}/edit', [BookingController::class, 'edit'])->name('bookings.edit'); // Form edit booking
Route::put('/bookings/{booking}', [BookingController::class, 'update'])->name('bookings.update');  // Simpan perubahan
Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy'); // Hapus booking