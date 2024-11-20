<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorREG extends Controller
{
    public function registroG(){
        return view('registroG');
    }

    public function procesarREG(ValidadorRegistroG $request)
    {
        $validated = $request->validated();
        
        return redirect()->back()->with('success', 'Registro exitoso');
    }
}
