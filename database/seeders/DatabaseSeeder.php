<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $categories = [
            'Technology',
            'Health',
            'Science',
            'Politics',
            'Sports',
            'Entertainment'
        ];

        foreach ($categories as $categoryName) {
            Category::create([
                'name' => $categoryName,
                'slug' => \Illuminate\Support\Str::slug($categoryName),
                'description' => fake()->sentence(),
                'thumbnail' => fake()->imageUrl(640, 480, 'cats', true),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }


        Post::factory(20)->create();
        // Create categories
    }
}
