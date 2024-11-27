@extends('layouts.plantilla2')

@section('contenido')


<link rel="stylesheet" href="{{ asset('css/resultado.css') }}">
<div class="card-home">
    <h1>¡Gracias por realizar el test!</h1>
    <h1>Resultado del Pre Diagnóstico</h1>
        <p>De acuerdo a tus respuestas, podrías presentar los siguientes padecimientos:</p>
        <ul>
            @foreach($enfermedades as $enfermedad)
                <li>{{ $enfermedad }}</li>
            @endforeach
        </ul>
    <p>Recuerda que este es un pre-diagnóstico. Te recomendamos consultar con un profesional de la salud mental para una evaluación completa.</p>
</div>




@endsection
