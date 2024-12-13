<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(rand(5,8), false),
            'slug' => Str::slug(fake()->sentence(rand(5,8), false)),
            'body' => fake()->paragraph(rand(10,20), false),
            'author_id' => User::factory(),
            'category_id' => Category::factory(),

        ];
    }
}
