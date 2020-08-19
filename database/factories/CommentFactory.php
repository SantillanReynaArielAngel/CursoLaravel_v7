<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body'=>$faker->text($maxNbChars = 100),
        'commentable_type'=>$faker->word,
        'commentable_id'=>$faker->unique()->numberBetween($min=1, $max=9000000),
    ];
});
