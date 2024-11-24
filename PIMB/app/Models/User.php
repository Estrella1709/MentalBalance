<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nombre', 'apellidoP', 'apellidoM', 'email', 'telefono', 
        'fecha_nacimiento', 'password', 'id_tipo_usuario',
    ];

    protected $hidden = ['password', 'remember_token'];

    public function medico()
    {
        return $this->hasOne(Medico::class, 'id_usuario');
    }
}
