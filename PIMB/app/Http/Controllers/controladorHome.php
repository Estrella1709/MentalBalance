<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorHome extends Controller
{
    public function home(){
        return view('home');
    }

    public function prueba(){
        return view('prueba');
    }

    public function directorioC(){
        return view('directorioC');
    }
}
