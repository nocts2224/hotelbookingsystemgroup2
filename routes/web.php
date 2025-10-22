<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::view('/about', 'pages.about')->name('about');
Route::get('/', function () { return view('pages.home');})->name('pages.home');

Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
