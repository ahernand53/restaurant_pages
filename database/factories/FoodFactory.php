<?php

use Faker\Generator as Faker;

$factory->define(App\Food::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'creator_id' => function(){
            return factory(App\Creators::class)->create()->id;
        },
        'image' => $faker->imageUrl(600, 300, 'food'),
        'description' => $faker->realText(150),
        'type' => function (array $food){
            return App\Creators::find($food['creator_id'])->specialization;
        },
        'status' => 'active',

    ];
});
