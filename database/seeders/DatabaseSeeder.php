<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Book;
use App\Models\Message;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed user contoh
        User::factory()->create([
            'name' => 'Hera',
            'email' => 'hera2@gmail.com',
        ]);

        // Seed data buku
        Book::create([
            'title' => 'Pemrograman Laravel Dasar',
            'author' => 'Heraa',
            'year' => 2025,
        ]);

        Book::create([
            'title' => 'Belajar Web Development',
            'author' => 'Nadya',
            'year' => 2024,
        ]);

        // Seed data message contoh
        Message::create([
            'content' => 'Selamat datang di aplikasi Kaspace!',
        ]);

        Message::create([
            'content' => 'Ini adalah pesan contoh kedua.',
        ]);
    }
}
