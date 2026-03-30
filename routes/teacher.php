<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaketController;

Route::post('/payment-callback', [OrderController::class, 'paymentCallback'])->name('payment-callback');