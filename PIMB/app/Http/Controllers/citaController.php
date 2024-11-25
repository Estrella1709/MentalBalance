<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidadorCitas;
use App\Models\Cita;
use App\Models\TipoCita;
use App\Models\Medico;
use Illuminate\Support\Facades\Auth;

class CitaController extends Controller
{
    /**
     * Muestra la lista de especialistas y los tipos de cita.
     */
    public function index()
    {
        $medicos = Medico::with(['user', 'especialidad'])->get(); // Traer los médicos con sus relaciones
        $tiposCita = TipoCita::all(); // Obtener los tipos de cita disponibles
        return view('directorioC', compact('medicos', 'tiposCita'));
    }

    /**
     * Almacena una nueva cita en la base de datos.
     */
    public function store(ValidadorCitas $request)
    {
        // Obtener el ID del paciente autenticado
        $pacienteId = Auth::id(); 

        // Insertar la cita
        Cita::create([
            'id_paciente' => auth()->user()->id,
            'id_medico' => $request->input('medico_id'),
            'fecha' => $request->input('fecha_cita'),
            'hora' => $request->input('hora_cita'),
            'id_tipo_cita' => $request->input('tipoCita'),
            'id_estado' => 1, // Establecer el valor inicial como pendiente.
        ]);

        return redirect()->back()->with('success', 'Cita solicitada correctamente.');
    }

    /**
     * Otros métodos (si no son requeridos, se pueden eliminar o dejar vacíos).
     */
    public function create()
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
