<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorDirectorio extends Controller
{
    public function directorio(){
        return view('directorioC');
    }
}
