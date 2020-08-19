<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'instagram'=>$faker->unique()->name,
        'github'=>$faker->unique()->name,
        'web'=>$faker->unique()->name,
    ];
});
