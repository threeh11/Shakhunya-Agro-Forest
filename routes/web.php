<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/product/{id}', 'product')->name('product')->where('id', '[0-9]+');
});

Route::controller(MainController::class)->group(function () {
    Route::post('/product/{id}/buy', )->name('saveBuy')->where('id', '[0-9]+');
    Route::post('/product/{id}/saveReviews', 'saveReviews')->name('saveReviews')->where('id', '[0-9]+');
});
