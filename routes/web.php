<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // tambahkan ini

// arahkan route utama ke method index di HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');
