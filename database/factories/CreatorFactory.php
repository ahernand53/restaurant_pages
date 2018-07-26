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

$factory->define(App\Food::class, function (Faker $faker) {

    $creators = '';
    return [
        'title' => $faker->text(50),
        'image' => $faker->imageUrl(600, 300, 'food'),
        'description' => $faker->realText(150),
        'status' => 'active',

    ];
});

$factory->define(App\Promotion::class, function (Faker $faker) {
    return [
        'promotion' => random_int(30, 70),
    ];
});


$factory->define(App\Sliders::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(40),
        'content' => $faker->realText(150),
        'image' => $faker->imageUrl(600, 400, 'food'),
        'active' => 1,
    ];
});

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Menu::class, function (Faker $faker){

    $dia = [
        1 => 'martes',
        2 => 'vienes',
        3 => 'domingo',
    ];

    return [
        'dia' => $dia[random_int(1,3)],
        'promotion_id' => factory(App\Promotion::class)->create()->id,
    ];
});
