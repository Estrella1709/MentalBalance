<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorREM extends Controller
{
    public function registroM(){
        return view('registroM');
    }

    public function procesarREM(ValidadorRegistroM $request)
    {
        $validatedData = $request->validated();

       // Medico::create($validatedData);

        return redirect()->back()->with('success', 'Registro de médico exitoso.');
    }
}
