<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReadingIntervalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $readingInterval = [];
        $users = User::pluck('id')->toArray();
        $books = Book::pluck('id')->toArray();

        for ($i = 0; $i < 50; $i++) {
            $readingInterval[] = [
                'user_id' => $users[array_rand($users)],
                'book_id' => $books[array_rand($books)],
                'start_page' => rand(1, 100), // Assuming each book has 100 pages
                'end_page' => rand(101, 200), // Assuming each book has 100 pages
            ];
        }

        DB::table('reading_intervals')->insert($readingInterval);
    }
}
