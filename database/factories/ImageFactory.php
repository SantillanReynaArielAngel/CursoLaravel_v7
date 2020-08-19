<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

//$images=App\Image::all();
//$NEW_IMAGES=count($images)+1;
$factory->define(Image::class, function (Faker $faker) {
    return [
        
        'url'=>$faker->imageUrl($width=640,$height=480),
        'imageable_type'=>$faker->word,
        'imageable_id'=>$faker->unique()->numberBetween($min=1, $max=9000000)
        //'imageable_id'=>$faker->$NEW_IMAGES
        //'imageable_id'=>$faker->unique()->randomNumber($nbDigits=18446744, $strict=false)
        //'imageable_id'=>$faker->unique()->numberBetween($min=1, $max=18446744073709551615)
        //teléfono ;     // número de teléfono fijo aleatorio, de 8 o 9 dígitos 
        //$ faker -> taxpayerIdentificationNumber ; // '165249277'
        //$ faker -> idNumber ; // "111222333" - Número de identificación personal holandés (BSN)
    ];
});
