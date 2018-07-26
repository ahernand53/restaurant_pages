<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $slides = factory(App\Sliders::class, 4)->create();
        $menus = factory(App\Menu::class, 10)->create();
        /*
                $creators = factory(App\Creators::class, 30)->create();

                $creators->each(function (App\Creators $creator) use ($creators){
                    $foods = factory(App\Food::class)
                        ->times(10)
                        ->create([
                            'creator_id' => $creator->id,
                            'creator_id' => $creator->specialization,
                        ]);


                });*/
    }
}
