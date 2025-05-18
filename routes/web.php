<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/advertisements', [\App\Http\Controllers\AdvertisementsController::class, 'index'])->name('advertisements.index');
Route::get('/advertisements/{id}', [\App\Http\Controllers\AdvertisementsController::class, 'show'])->name('advertisements.show');

