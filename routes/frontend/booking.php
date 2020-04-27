<?php

use App\Http\Controllers\Frontend\Booking\BookingController;

/*
 * Frontend Access Controllers
 * All route names are prefixed with 'frontend.booking'.
 */
Route::group(['as' => 'booking.'], function () {

    // These routes require no user to be logged in
    Route::group(['middleware' => 'guest'], function () {
		Route::post('booking', [BookingController::class, 'book'])->name('book');
    });
});
