<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_paciente', 'id_medico', 'fecha', 'hora', 'id_tipo_cita', 'id_estado',
    ];

    // Relación con TipoCita
    public function tipoCita()
    {
        return $this->belongsTo(TipoCita::class, 'id_tipo_cita');
    }

    // Relación con EstadoCita
    public function estadoCita()
    {
        return $this->belongsTo(EstadoCita::class, 'id_estado');
    }
}

