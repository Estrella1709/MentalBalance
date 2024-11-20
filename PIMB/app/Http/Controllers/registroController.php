<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\ValidadorRegistroG;

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

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidadorRegistroG $request)
    {
        $idTipoUsuario = $request->input('user-type');
        
        DB::table('users')->insert([
            "nombre"=>$request->input('nombre'),
            "apellidoP"=>$request->input('apellido_paterno'),
            "apellidoM"=>$request->input('apellido_materno'),
            "email"=>$request->input('email'),
            "telefono"=>$request->input('telefono'),
            "fecha_nacimiento"=>$request->input('fecha_nacimiento'),
            "password"=>$request->input('password'),
            "id_tipo_usuario" => $idTipoUsuario,
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

        $validated = $request->validated();
        
        return redirect()->back()->with('success', 'Registro exitoso');
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
