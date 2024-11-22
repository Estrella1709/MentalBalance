<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class, 'id_especialidad');
    }

}
