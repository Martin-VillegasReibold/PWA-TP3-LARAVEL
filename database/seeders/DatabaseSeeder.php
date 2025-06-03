<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
       
        $this->call(
            UserSeeder::class
        );
        $category = new Category();
        $category->name = "a";
        $category->save();

        $category = new Category();
        $category->name = "b";
        $category->save();

        $category = new Category();
        $category->name = "c";
        $category->save();

        $category = new Category();
        $category->name = "d";
        $category->save();

        $category = new Category();
        $category->name = "e";
        $category->save();

        Post::factory(100)->create();
    }
}
