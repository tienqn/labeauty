<?php

use App\Http\Controllers\Frontend\Booking\BookingController;

/*
 * Frontend Access Controllers
 * All route names are prefixed with 'frontend.booking'.
 */
Route::group(['as' => 'booking.'], function () {
    Route::post('booking', [BookingController::class, 'book'])->name('book');
});
