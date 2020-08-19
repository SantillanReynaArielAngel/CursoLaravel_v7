<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'name'=>$faker->text($maxNbChars=50),
        'content'=>$faker->paragraph($nbSentences=3, $variableNbSentences=true)
    ];
});
