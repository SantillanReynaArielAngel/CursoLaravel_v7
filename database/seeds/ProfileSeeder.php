<?php

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=App\User::all();
        factory(App\Profile::class,10)->create()->each(function ($profile) use ($users){
            $profile->user()->associate($users->random());
            $proflie->save();
        });
    }
}
