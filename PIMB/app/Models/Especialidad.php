<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;

    // Especificamos el nombre de la tabla
    protected $table = 'especialidades';

    protected $fillable = ['tipo'];

    public function medicos()
    {
        return $this->hasMany(Medico::class);
    }

}

