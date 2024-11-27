<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'enfermedades';
    
    // Columnas asignables
    protected $fillable = ['nombre'];

    // Si no usas timestamps, agrega esta línea
    public $timestamps = false;

}
