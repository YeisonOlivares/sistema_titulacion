<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class academico extends Model
{
    protected $fillable = [
        'run', 'nombre', 'correo',
    ];
}
