<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// route untuk tampilkan form
Route::get('/form', function () {
    return view('form');
});

// route untuk kirim data message
Route::post('/kirim-pesan', [HomeController::class, 'kirimPesan'])->name('kirim.pesan');
