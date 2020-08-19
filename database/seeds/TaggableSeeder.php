<?php

use Illuminate\Database\Seeder;

class TaggableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //El each () método itera sobre los elementos de la colección y pasa cada elemento a una devolución de llamada
        $tags=App\Tag::all();
        factory(App\Taggable::class,10)->create()->each(function ($taggable) use ($tags){           
            $taggable->tag()->associate($tags->random());
            $taggable->save();
        });
    }
}
