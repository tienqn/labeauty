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
	Route::get('/show_home', [SliderController::class, 'showHome'])->name('show_home');
	Route::post('/update_order', [SliderController::class, 'updateOrder'])->name('update_order');

	Route::group(['prefix' => '{slider}'], function () {
		Route::get('/', [SliderController::class, 'show'])->name('show');
		Route::patch('/', [SliderController::class, 'update'])->name('update');
		Route::post('/update_banner', [SliderController::class, 'updateBanner'])->name('update_banner');
	});
});
