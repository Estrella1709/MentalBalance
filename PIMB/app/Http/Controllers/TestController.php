<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreDiagnostico;
use App\Models\Enfermedad;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValidadorFormulario;

class TestController extends Controller
{
    public function procesarTest(ValidadorFormulario $request)
    {
        // Define las preguntas asociadas a cada enfermedad
        $enfermedades = [
            1 => [4, 6, 13, 16, 18], // Ansiedad    
            2 => [3, 8, 11, 15, 20], // Bipolaridad
            3 => [2, 7, 10, 14, 19], // Depresión
            4 => [1, 5, 9, 12, 17], // TDAH
        ];

        $resultados = [];

        // Calcula el número de "sí" para cada enfermedad
        foreach ($enfermedades as $idEnfermedad => $preguntas) {
            $resultados[$idEnfermedad] = 0;
            foreach ($preguntas as $pregunta) {
                if ($request->input("q$pregunta") === 'si') {
                    $resultados[$idEnfermedad]++;
                }
            }
        }

        // Determina el puntaje máximo
        $puntajeMaximo = max($resultados);

        // Identifica todas las enfermedades con el puntaje máximo
        $enfermedadesDetectadas = array_keys($resultados, $puntajeMaximo);

        // Realiza el insert en la base de datos por cada enfermedad detectada
        foreach ($enfermedadesDetectadas as $idEnfermedad) {
            PreDiagnostico::create([
                'id_enfermedades' => $idEnfermedad,
                'id_paciente' => Auth::user()->paciente->id, // Tomamos el ID del paciente
            ]);
        }

        // Recupera los nombres de todas las enfermedades detectadas
        $nombresEnfermedades = Enfermedad::whereIn('id', $enfermedadesDetectadas)->pluck('nombre');

        // Retorna una vista con los resultados
        
        return view('resultado', [
            'enfermedades' => $nombresEnfermedades,
        ])->with('success', '¡Test procesado con éxito! Aquí están los resultados.');
        
    }


    public function mostrarResultadoPreDiagnostico()
    {
        // Recuperar el pre-diagnóstico del paciente autenticado
        $resultado = PreDiagnostico::where('id_paciente', Auth::user()->paciente->id)->get();

        // Verificar si existe el resultado
        if ($resultado->isEmpty()) {
            return view('resultado', ['enfermedades' => []]);
        }

        // Recuperar los nombres de las enfermedades detectadas
        $enfermedades = Enfermedad::whereIn('id', $resultado->pluck('id_enfermedades'))->pluck('nombre');

        // Pasar los resultados a la vista
        return view('resultado', [
            'enfermedades' => $enfermedades,
        ]);
    }

}
