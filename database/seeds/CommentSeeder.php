<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=App\User::all();
        factory(App\Comment::class,10)->create()->each(function($comment) use ($users){
            $comment->user()->associate($users->random());
            $comment->save();
        });
    }
}
