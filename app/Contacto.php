<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contactos';

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'asunto',
        'tel',
        'mensaje'
    ];
}
