<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

    
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::view('/about', 'about')->name('about');

Route::get('/home', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {
    Route::resource('rooms', App\Http\Controllers\RoomController::class);
    Route::resource('guests', App\Http\Controllers\GuestController::class);
    Route::resource('bookings', App\Http\Controllers\BookingController::class);
});