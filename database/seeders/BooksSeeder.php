<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [];
        for ($i = 1; $i <= 5; $i++) {
            $books[] = [
                'title' => 'Book ' . $i,
                'pages' => rand(100, 500), // Generating random number of pages between 100 and 500
            ];
        }

        Book::insert($books);
    }
}
