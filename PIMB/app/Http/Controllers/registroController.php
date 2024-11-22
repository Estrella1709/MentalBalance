<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\ValidadorRegistroG;
use App\Http\Requests\ValidadorRegistroM;

class registroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registroG');
    }

    public function showFormMedico($user_id)
    {
        return view('registroM', compact('user_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidadorRegistroG $request)
    {
        $idTipoUsuario = $request->input('user-type');

        $userId = DB::table('users')->insertGetId([
            "nombre" => $request->input('nombre'),
            "apellidoP" => $request->input('apellido_paterno'),
            "apellidoM" => $request->input('apellido_materno'),
            "email" => $request->input('email'),
            "telefono" => $request->input('telefono'),
            "fecha_nacimiento" => $request->input('fecha_nacimiento'),
            "password" => bcrypt($request->input('password')), 
            "id_tipo_usuario" => $idTipoUsuario,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        // Si el tipo de usuario es médico, redirigir al formulario de registro de médico
        if ($idTipoUsuario == 1) { // Solo si el tipo de usuario es médico
            return redirect()->route('registroM', ['user_id' => $userId]);
        }

        // Si es otro tipo de usuario (Paciente), solo redirigir a la pantalla de inicio de sesión
        return redirect()->route('rutaInicioSesion')->with('success', 'Registro exitoso');
    }   

    // Método storeMedico para el registro del médico
    public function storeMedico(ValidadorRegistroM $request)
    {
        
        DB::table('medicos')->insert([
            'id_especialidad' => $request->input('especialidad'),
            'cedula' => $request->input('cedula_profesional'),
            'descripcion' => $request->input('descripcion'),
            'id_usuario' => $request->input('user_id'), // Asignamos el user_id
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Redirigir con mensaje de éxito
        return redirect()->route('rutaInicioSesion')->with('success', 'Registro de médico completado');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
