<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Data array buku minimal 5
        $books = [
            ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun' => 2005],
            ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'tahun' => 1980],
            ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'tahun' => 2009],
            ['judul' => 'Pulang', 'penulis' => 'Tere Liye', 'tahun' => 2015],
            ['judul' => 'Perahu Kertas', 'penulis' => 'Dewi Lestari', 'tahun' => 2008],
        ];

        // Kirim data ke view home.blade.php
        return view('home', compact('books'));
    }
}
