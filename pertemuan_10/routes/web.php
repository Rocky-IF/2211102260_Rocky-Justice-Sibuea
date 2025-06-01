<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('car.index');
});

// Tambahkan ini biar semua route-nya lengkap:
Route::resource('car', CarController::class);