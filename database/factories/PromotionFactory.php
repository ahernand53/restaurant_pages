<?php

use Faker\Generator as Faker;

$factory->define(App\Promotion::class, function (Faker $faker) {
    return [
        'food_id' => random_int(1,50),
        'promotion' => random_int(30, 70),
    ];
});
