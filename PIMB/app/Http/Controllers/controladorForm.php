<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorFormulario;

class controladorForm extends Controller
{
    public function formulario(){
        return view('formulario');
    }

    public function enviarTest(ValidadorFormulario $request)
    {

        $datos = $request->validated();

        return redirect()->back()->with('success', 'Formulario enviado correctamente.');
    }

    
}
