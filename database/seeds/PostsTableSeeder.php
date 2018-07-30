<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 300)->create()->each(function(App\Post $post){
            $post->tags()->attach([
                rand(1,5),
                rand(6,14),
                rand(15,20),
            ]);
        });

        factory(App\Post::class, 300)->create()->each(function(App\Post $post){
            $post->categories()->attach([
                rand(1,3),
                rand(4,6),
                rand(7,9),
            ]);
        });
    }
}
