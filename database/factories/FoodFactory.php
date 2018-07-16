<?php

use Faker\Generator as Faker;

$factory->define(App\Food::class, function (Faker $faker) {
    $creator_id = rand(1,10);

    return [
        'title' => $faker->text(50),
        'creator_id' => $creator_id,
        'image' => $faker->imageUrl(600, 300, 'food'),
        'description' => $faker->realText(150),
        'type' => function () use ($creator_id){
            return App\Creators::find($creator_id)->specialization;
        },
        'status' => 'active',

    ];
});
