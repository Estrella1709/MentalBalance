<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValidadorCitas;


class CitasController extends Controller
{
    
    public function store(ValidadorCitas $request)
    {
        $user = auth()->user();
        $paciente = DB::table('pacientes')->where('id_usuario', $user->id)->first();


        if (!$paciente) {
            return redirect()->back()->with('error', 'No se encontró un paciente relacionado con este usuario.');
        }

        // Crear la cita
        $cita = Cita::create([
            'id_paciente' => $paciente->id,
            'id_medico' => $request->id_medico,
            'id_tipo_cita' => $request->tipoCita,
            'id_estado' => 1, // Estado 'Pendiente'
            'fecha' => $request->fecha_cita,
            'hora' => $request->hora_cita,
        ]);

        return redirect()->route('rutaDirectorio')->with('success', 'Cita solicitada con éxito.');
    }
}

