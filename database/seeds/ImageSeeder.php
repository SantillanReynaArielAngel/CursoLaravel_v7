<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //$images=App\Image::all();
        //$NEW_IMAGES=count($images)+1;
        factory(App\Image::class,10)->create();
    }
}
