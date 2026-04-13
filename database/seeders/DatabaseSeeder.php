<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // use WithoutModelEvents; // hilangkan agar fitur automatis slug berjalan

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Post::factory(10)->create();
        // User::factory(10)->hasPosts(2)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $posts = [
        //     [
        //         'title' => 'First Post',
        //         'content' => 'This is the content of the first post.',
        //         'user_id' => 1
        //     ],
        //     [
        //         'title' => 'Second Post',
        //         'content' => 'This is the content of the second post.',
        //         'user_id' => 2
        //     ],
        // ];

        // foreach ($posts as $post) {
        //     Post::create($post);
        // }

    }
}
