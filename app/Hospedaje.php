<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospedaje extends Model
{
    protected $fillable = [
        'Nombre' ,
        'Direccion' ,
        'Tipo' ,
        'Telefono'

];

}