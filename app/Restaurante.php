<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $fillable = [
        'Nombre' ,
        'Direccion' ,
        'Tipo' ,
        'Telefono'

    ];
}
