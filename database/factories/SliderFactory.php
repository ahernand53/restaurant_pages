<?php

use Faker\Generator as Faker;

$factory->define(App\Sliders::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(40),
        'content' => $faker->realText(150),
        'image' => $faker->imageUrl(600, 400, 'food'),
        'active' => 1,
    ];
});
