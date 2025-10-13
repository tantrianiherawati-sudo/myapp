<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua buku dari database (urutkan sesuai id)
        $books = Book::orderBy('id')->get();

        // Ambil semua pesan dari session
        $messages = $request->session()->get('messages', []);

        return view('home', [
            'books' => $books,
            'messages' => $messages,
        ]);
    }

    public function kirimPesan(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        // Ambil pesan lama dari session
        $messages = $request->session()->get('messages', []);

        // Tambahkan pesan baru (di bawah)
        $messages[] = $request->input('message');

        // Simpan kembali ke session
        $request->session()->put('messages', $messages);

        // Redirect ke home (agar URL / tidak menampilkan form POST)
        return redirect()->route('home');
    }
}
