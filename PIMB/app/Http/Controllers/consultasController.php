<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Cita;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class consultasController extends Controller
{
    
    public function index()
    {
        $medicos = Medico::with(['user', 'especialidad'])->get();

        return view('directorioC', compact('medicos'));
    }

    public function indexCitas()
    {
        // Obtener las citas del paciente actual (asumimos que el usuario está autenticado)
        $citas = Cita::with(['medico.user', 'tipoCita', 'estadoCita'])
        ->whereHas('paciente', function ($query) {
            $query->where('id_usuario', auth()->id());
        })
        ->get();


        $citas->each(function ($cita) {
            $cita->fecha = \Carbon\Carbon::parse($cita->fecha)->format('d-m-Y');
        });

        return view('citas', compact('citas'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
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
