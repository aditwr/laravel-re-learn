<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(10)->create();
        Post::factory(10)->create();

        Category::create([
            "name"=>"Lifestyle",
            "slug"=>"lifestyle"
        ]);
        Category::create([
            "name"=>"Travel",
            "slug"=>"travel"
        ]);
        Category::create([
            "name"=>"Explore",
            "slug"=>"explore"
        ]);
        Category::create([
            "name"=>"Health",
            "slug"=>"health"
        ]);
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
