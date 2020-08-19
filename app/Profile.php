<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //RELACION NORMAL 1 A 1
    public function location()// minuscula_modeloforeano
    {
        return $this->hasOne('App\Location');//direccion del modelo foreano
    }

    //RELACION NORMAL 1 A 1 INVERSO
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
