<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorHome extends Controller
{
    public function home(){
        
    }

    public function prueba(){
        return view('prueba');
    }

    public function citas(){
        return view('citas');
    }

    
}
