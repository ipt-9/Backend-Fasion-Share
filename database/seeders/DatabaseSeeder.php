<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bookmark_user;
use App\Models\Like_user;
use App\Models\Post;
use App\Models\Tag;
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

            ->create();

        Like_user::factory()
            ->count(20)
            ->create();

        Bookmark_user::factory()
            ->count(20)
            ->create();

        Tag::factory()
            ->count(20)
            ->create();

    }
}
