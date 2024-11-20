<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorHome extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function tratamiento()
    {
        return view('tratamientos');
    }
}
