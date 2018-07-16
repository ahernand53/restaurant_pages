<?php

use Faker\Generator as Faker;

$factory->define(App\Creators::class, function (Faker $faker) {

    $specialization = [
        1 => 'breakfast',
        2 => 'lauch',
        3 => 'dinner',
        4 => 'snack',
    ];

    return [
        'name' => $faker->name(),
        'specialization' => $specialization[random_int(1,4)],
        'contact' => $faker->email(),
    ];
});
