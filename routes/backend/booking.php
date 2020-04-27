<?php

use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\BookingStatusController;

// All route names are prefixed with 'admin.booking'.
Route::group([
    'prefix' => 'booking',
    'as' => 'booking.',
], function () {
	// booking CRUD
	Route::get('/', [BookingController::class, 'index'])->name('index');

	// booking Status'
	Route::get('/waiting', [BookingStatusController::class, 'getWaiting'])->name('waiting');
	Route::get('/called', [BookingStatusController::class, 'getCalled'])->name('called');
	Route::get('/processing', [BookingStatusController::class, 'getProcessing'])->name('processing');
	Route::get('/completed', [BookingStatusController::class, 'getCompleted'])->name('completed');
	Route::get('/reject', [BookingStatusController::class, 'getReject'])->name('reject');

	Route::group(['prefix' => '{booking}'], function () {
		Route::get('/', [BookingController::class, 'show'])->name('show');
		Route::patch('/', [BookingController::class, 'update'])->name('update');
	});
});
