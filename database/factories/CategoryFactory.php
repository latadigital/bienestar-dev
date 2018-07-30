<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    //$title = $faker->sentence(4);
    $title = $faker->unique()->word(2);
    return [
        'name' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text(500),
        'icohome' => $faker->imageUrl($width = 50, $height = 50),
        'iconav' => $faker->imageUrl($width = 50, $height = 50),
    ];
    
});




