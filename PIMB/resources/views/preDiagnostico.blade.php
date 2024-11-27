@extends('layouts.plantilla2')
@section('contenido')

<div class="container">
        <h2>Mi Pre-Diagnóstico</h2>
        
        @if($resultado)
            <div class="resultado">
                <h3>Resultado del Test</h3>
                <p><strong>Diagnóstico: </strong>{{ $resultado->diagnostico }}</p>
                <p><strong>Descripción: </strong>{{ $resultado->descripcion }}</p>
                <p><strong>Recomendaciones: </strong>{{ $resultado->recomendaciones }}</p>
            </div>
        @else
            <p>No has realizado el test todavía. <a href="{{ route('rutaRealizarTest') }}">Haz el test ahora</a>.</p>
        @endif
    </div>

@endsection