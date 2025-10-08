<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Tampilan awal tanpa pesan
        return view('home');
    }

    public function kirimPesan(Request $request)
    {
        // Ambil data dari form
        $message = $request->input('message');

        // Kirim data ke view home.blade.php
        return view('home', ['message' => $message]);
    }
}
