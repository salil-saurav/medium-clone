<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $title = fake()->sentence();

        return [
            'title' => $title,
            'thumbnail' => fake()->imageUrl(640, 480, 'cats', true),
            'content' => fake()->paragraphs(3, true),
            'slug' => Str::slug($title),
            'user_id' => \App\Models\User::factory(),
            'category_id' => Category::inRandomOrder()->first()->id,
            'is_published' => fake()->boolean(),
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'view_count' => fake()->numberBetween(0, 1000),
            'comment_count' => fake()->numberBetween(0, 100),
            'status' => fake()->randomElement(['draft', 'published', 'archived']),
            'meta_title' => fake()->sentence(),
            'meta_description' => fake()->paragraph(),
        ];
    }
}
