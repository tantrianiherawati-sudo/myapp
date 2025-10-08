<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Data buku
        $books = [
            ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun' => 2005],
            ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'tahun' => 1980],
            ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'tahun' => 2009],
            ['judul' => 'Pulang', 'penulis' => 'Tere Liye', 'tahun' => 2015],
            ['judul' => 'Perahu Kertas', 'penulis' => 'Dewi Lestari', 'tahun' => 2008],
        ];

        // Ambil semua pesan dari session
        $messages = $request->session()->get('messages', []);

        return view('home', [
            'books' => $books,
            'messages' => $messages
        ]);
    }

    public function kirimPesan(Request $request)
    {
        // Validasi pesan biar nggak kosong
        $request->validate([
            'message' => 'required|string|max:255'
        ]);

        // Ambil pesan lama dari session
        $messages = $request->session()->get('messages', []);

        // Tambahkan pesan baru ke array lama
        $messages[] = $request->input('message');

        // Simpan kembali ke session
        $request->session()->put('messages', $messages);

        // Redirect kembali ke home
        return redirect()->route('home');
    }
}
