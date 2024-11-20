<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorInfoEM extends Controller
{
    public function depresion(){
        return view('depresion');
    }

    public function bipolaridad(){
        return view('bipolaridad');
    }

    public function ansiedad(){
        return view('ansiedad');
    }

    public function tdah(){
        return view('tdah');
    }
}
