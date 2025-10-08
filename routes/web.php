<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/form', function () {
    return view('form');
});
Route::post('/kirim-pesan', [HomeController::class, 'kirimPesan'])->name('kirim.pesan');
