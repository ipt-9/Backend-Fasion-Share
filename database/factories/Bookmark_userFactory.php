<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookmark_user>
 */
class Bookmark_userFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

             return [
                 'user_id' => fake()-> numberBetween(1, 20),
                 'post_id' => fake()-> numberBetween(1, 20),
             ];

    }
}