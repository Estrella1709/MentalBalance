<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorRegistroG;

class controladorREG extends Controller
{
    public function registroG(){
        return view('registroG');
    }

    public function procesarREG(ValidadorRegistroG $request)
    {
        // Los datos validados se pueden obtener así:
        $validated = $request->validated();
        
        // Puedes agregar la lógica de registro aquí
        return redirect()->back()->with('success', 'Registro exitoso');
    }
}
