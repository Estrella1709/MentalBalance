<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class consultasController extends Controller
{
    
    public function index()
    {
        $medicos = Medico::with(['user', 'especialidad'])->get();

        return view('directorioC', compact('medicos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
 
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
