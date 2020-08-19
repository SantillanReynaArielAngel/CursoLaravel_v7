<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles=App\Profile::all();
        factory(App\Location::class,10)->create()->each(function($location) use ($profiles) {
            $location->profile()->associate($profiles->random());
            $location->save();
        });
    }
}
