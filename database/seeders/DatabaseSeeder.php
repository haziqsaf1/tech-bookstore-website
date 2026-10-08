<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    
    public function run(): void
    {

        Category::factory(4)
                ->has(Book::factory()->count(5))
                ->create();
                
       /* Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'description' => 'A novel set in the Roaring Twenties.',
            'price' => 10.99,
        ]);

        Book::create([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'description' => 'A classic of modern American literature.',
            'price' => 12.50,
        ]); */
    }
}


