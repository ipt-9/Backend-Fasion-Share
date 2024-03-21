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
            //'user_id' => fake()->numberBetween(1,20),
            'description' => fake()->text(150),
            'date'=>now(),
            'likes' => fake()-> numberBetween(35, 1000000),
            //'image'=> '/postPictures/Glazi.jpg',
            'image'=> fake()->imageURL(360, 360, 'animals', true, 'cats')
        ];
    }
}
