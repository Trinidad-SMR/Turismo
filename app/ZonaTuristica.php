<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZonaTuristica extends Model
{
    protected $fillable = [
        'Nombre' ,
        'Descripcion' ,
        'Direccion' ,
        'Horario' ,
        'Actividades'

    ];
}
