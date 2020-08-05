<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //RELACION NORMAL 1 A 1 INVERSO
    public function profile()//miuscula modeloforeano
    {
        return $this->belongsTo('App\Profile');//direccion modeloforeano
    }

}
