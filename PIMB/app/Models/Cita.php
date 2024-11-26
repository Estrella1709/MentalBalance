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

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'id_medico');
    }

    public function tipoCita()
    {
        return $this->belongsTo(TipoCita::class, 'id_tipo_cita', 'id');
    }

    public function estadoCita()
    {
        return $this->belongsTo(EstadoCita::class, 'id_estado', 'id');
    }
}

