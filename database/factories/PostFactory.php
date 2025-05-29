<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
        return [
            'title' => $this->faker->sentence(),
            'poster' => $this->faker->name(),
            'content' => $this->faker->text(1000),
            'category' => $this->faker->randomElement(['a','b','c','d','e']),
            'published_at' => $this->faker->dateTime(),
        ];
    }
}
