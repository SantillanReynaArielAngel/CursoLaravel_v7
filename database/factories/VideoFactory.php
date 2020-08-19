<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence($nbWords=6, $variableNbWords=true),
        'url'=>$faker->url,
    ];
});
