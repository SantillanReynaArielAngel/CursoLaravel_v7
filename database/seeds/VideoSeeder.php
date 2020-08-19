<?php

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=App\Categorie::all();
        $users=App\User::all();
        factory(App\Video::class,10)->create()->each(function($video) use ($categories,$users){
            $video->categorie()->associate($categories->random());
            $video->save();

            $video->user()->associate($users->random());
            $video->save();
        });
    }
}
