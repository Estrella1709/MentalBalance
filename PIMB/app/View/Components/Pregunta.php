<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Pregunta extends Component
{
    public $numero;
    public $texto;
    public $opciones;
    public $name;

    public function __construct($numero, $texto, $opciones, $name)
    {
        $this->numero = $numero;
        $this->texto = $texto;
        $this->opciones = $opciones;
        $this->name = $name;
    }

    public function render()
    {
        return view('components.pregunta');
    }
}
