<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trabajo extends Model
{
    public function actividad()
    {
        return $this->belongsTo(actividad::class);
    }
}
