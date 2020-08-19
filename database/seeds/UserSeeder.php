<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $levels = App\Level::all();
        factory(App\User::class,10)->create()->each(function ($user) use ($levels){
            $user->level()->associate($levels->random());
            $user->save();
        });
    }
}
