<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RoomController;


Route::get('/guest', [GuestController::class, 'index'])->name('pages.guest');
Route::get('/rooms', [RoomController::class, 'index'])->name('pages.rooms');

Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::view('/about', 'pages.about')->name('about');
Route::get('/', function () { return view('pages.home');})->name('pages.home');

Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
