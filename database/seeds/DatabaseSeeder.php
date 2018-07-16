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
        $creator = factory(App\Creators::class, 10)->create();
        $food = factory(App\Food::class, 50)->create();
        $slides = factory(App\Sliders::class, 4)->create();
    }
}
