<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    protected $fillable = [
        'run', 'nombre', 'telefono', 'carrera',
    ];

    protected $hidden = [
        'id_trabajo'
    ];
    public function trabajo()
    {
        return $this->belongsTo(trabajo::class);
    }
}
