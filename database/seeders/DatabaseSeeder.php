<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Like_user;
use App\Models\Post;
use Database\Factories\Like_userFactory;
use Illuminate\Database\Seeder;
use App\Models\User;
use database\factories;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->count(20)
            ->has(Post::factory()->count(4))
            //->has(Like_user::factory()->count(4))
            ->create();


    }
}
