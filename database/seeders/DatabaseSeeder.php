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
        $category->name = "Action";
        $category->description = "Action genre focuses on the protagonist’s sacrifice for positive movement along the death / life VALUE spectrum while generating feelings of excitement in the reader.";
        $category->save();

        $category = new Category();
        $category->name = "Thriller";
        $category->description = "Thriller genre focuses on the protagonist’s need for safety. This leads the reader to identify with the protagonist, who seeks to defeat an antagonist that personifies evil.";
        $category->save();

        $category = new Category();
        $category->name = "Love";
        $category->description = "Love genre focuses on the need for connection in a variety of forms, including desire, commitment, and intimacy, allowing readers to identify with them.";
        $category->save();

        $category = new Category();
        $category->name = "Horror";
        $category->description = "Horror genre focuses on the ability of a protagonist to self-actualize through the expression of the gift of courage and selflessness in the face of fear. ";
        $category->save();

        $category = new Category();
        $category->name = "Crime";
        $category->description = "Crime genre focuses on the Justice / Injustice spectrum while generating feelings in the reader of intrigue and security or personal safety when the perpetrator is exposed.";
        $category->save();

        Post::factory(100)->create();
    }
}
