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
            'title' => ucfirst($this->faker->words(rand(5, 10), true)),
            'user_id' => $this->faker->numberBetween(1, 10),
            'content' => $this->faker->paragraphs(10, true),
            'category_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
