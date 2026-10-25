<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::post('/contact', [PortfolioController::class, 'contact'])->middleware('throttle:5,10')->name('contact.submit');
Route::get('/api/rack-status', [PortfolioController::class, 'rackStatus'])->name('api.rack');