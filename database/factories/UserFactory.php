<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;// para encriptar la contrasenia

$factory->define(User::class, function (Faker $faker) {
    return [
        'name'=>$faker->unique()->name,
        'email'=>$faker->unique()->freeEmail,
        'password'=>Hash::make('password'),
    ];
});
