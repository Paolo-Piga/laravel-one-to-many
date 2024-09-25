<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
// utilizzo del faker
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for($i=0; $i < 100; $i++) {
            $new_post = new Post ();
            $new_post->title = $faker->sentence;
            $new_post->slug = ProjectHelper::generateSLug(string: $faker->sentence, model: Post::class);
            $new_post->description = $faker->text(maxNbChars:100);
            $new_post->save();
        }
    }
}


