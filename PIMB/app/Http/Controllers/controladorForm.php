<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorForm extends Controller
{
    public function formulario(){
        return view('formulario');
    }
}
