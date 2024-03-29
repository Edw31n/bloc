<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $title = $faker->sentence(8);
    return [
        'name' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text(500)
    ];
});
