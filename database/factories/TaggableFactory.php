<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Taggable;
use Faker\Generator as Faker;

$factory->define(Taggable::class, function (Faker $faker) {
    return [
        'taggable_type'=>$faker->unique()->word,
        'taggable_id'=>$faker->unique()->numberBetween($min=1, $max=9000000)
    ];
});
