<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'publisher' => 'Bentang', 'year' => 2005, 'pages' => 534, 'stock' => 10],
            ['title' => 'Bumi Manusia', 'author' => 'Pramoedya Ananta Toer', 'publisher' => 'Hasta Mitra', 'year' => 1980, 'pages' => 512, 'stock' => 5],
            ['title' => 'Negeri 5 Menara', 'author' => 'A. Fuadi', 'publisher' => 'Gramedia', 'year' => 2009, 'pages' => 392, 'stock' => 8],
            ['title' => 'Pulang', 'author' => 'Tere Liye', 'publisher' => 'Gramedia', 'year' => 2015, 'pages' => 412, 'stock' => 6],
            ['title' => 'Perahu Kertas', 'author' => 'Dewi Lestari', 'publisher' => 'Bentang', 'year' => 2008, 'pages' => 320, 'stock' => 7],
        ];

        foreach ($books as $b) {
            Book::create($b);
        }
    }
}
