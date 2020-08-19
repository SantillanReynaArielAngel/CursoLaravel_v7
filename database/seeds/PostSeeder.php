<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
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
        factory(App\Post::class,10)->create()->each(function($post) use ($categories,$users) {
            $post->categorie()->associate($categories->random());
            $post->save();

            $post->user()->associate($users->random());
            $post->save();
        });
    }
}
