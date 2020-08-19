<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Level;
use Faker\Generator as Faker;//permite sembrar datos falsos

$factory->define(Level::class, function (Faker $faker) {    //Se define el factory $faker contiene una gran cantidad de metodos para poder generar datos falsos
    return [    //nos retornara un arreglo
        'name' => $faker->unique()->word //Modificador unique() garantiza datos unicos.  Propiedad "word" devuelve una palabra aleatoria
    ];
});
