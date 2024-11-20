<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorIS extends Controller
{
    public function inicioSesion(){
        return view('inicioSesion');
    }

    public function procesarIS(ValidadorIS $request)
    {
        
        $validated = $request->validated();
        
       
        return redirect()->back()->with('success', 'Inicio de sesión exitoso');
    }
}
