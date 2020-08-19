<?php

use Illuminate\Database\Seeder;

class GroupUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $groups=App\Group::all();
        $users=App\User::all();
        factory(App\GroupUser::class,10)->create([
            'is_active'=>true,
        ])->each(function($groupuser) use ($groups,$users){
            $groupuser->groups()->associate($groups->random());
            $groupuser->save();

            $groupuser->users()->associate($users->random());
            $groupuser->save();
        });
    }
}
