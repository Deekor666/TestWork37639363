<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = ['Terry A', 'Steven Price', 'John Smith'];
        $genres = ['Fiction', 'Non-Fiction', 'Business', 'Horror'];
        $publishers = ['Publisher A', 'Publisher B', 'Publisher C'];

        for ($i = 0; $i <= 10; $i++) {
            DB::table('books')->insert(
                [
                    'title' => "Book title {$i}",
                    'year' => rand(1995, 2021),
                    'genre' => $genres[rand(0, count($genres) - 1)],
                    'author' => $authors[rand(0, count($authors) - 1)],
                    'publisher' => $publishers[rand(
                        0,
                        count($publishers) - 1
                    )]
                ]
            );
        }
    }
}
