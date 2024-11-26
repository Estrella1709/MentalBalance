<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_paciente',
        'id_medico',
        'id_tipo_cita',
        'id_estado',
        'fecha',
        'hora',
    ];
}

