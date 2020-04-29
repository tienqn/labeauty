<?php

use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SliderStatusController;

// All route names are prefixed with 'admin.Slider'.
Route::group([
    'prefix' => 'slider',
    'as' => 'slider.',
], function () {
	// Slider CRUD
	Route::get('/', [SliderController::class, 'index'])->name('index');

	Route::group(['prefix' => '{slider}'], function () {
		Route::get('/', [SliderController::class, 'show'])->name('show');
		Route::patch('/', [SliderController::class, 'update'])->name('update');
	});
});
