<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //Valores por defecto de una columna(atributo de una tabla):
    protected $attributes=[
        'name'=>'bronze', //nombre_columna(atributo) => valor,
    ];

    //RELACION NORMAL 1 A N
    public function users()// minuscula_plural_modeloforeano
    {
        return $this->hasMany('App\User');//direccion del modelo foreano
    }

    //RELACION ATRAVEZ DE 1 A N
    public function posts()//minuscula_plural_modeloforeano
    {
        return $this->hasManyThrough('App\Post', 'App\User');//1er parametro: direccion modelofinal. 2do parametro: direccion modelointermedio
    }

    public function videos()//minuscula_plural_modeloforeano
    {
        return $this->hasManyThrough('App\Video','App\User');//1er parametro: direccion modelofinal. 2do parametro: direccion modelointermedio
    }

    public function comments()//minuscula_plural_modeloforeano
    {
        return $thhis->hasManyThrough('App\Comment','App\User');//1er parametro: direccion modelofinal. 2do parametro: direccion modelointermedio
    }
}
