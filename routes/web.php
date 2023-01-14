<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/product/{id}', 'product')->name('product')->where('id', '[0-9]+');
});
