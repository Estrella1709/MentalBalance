@extends('layouts.plantilla2')
    @section('contenido')

    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">

    <div class="card-home">
        <h1 class="bienvenido">¡Conoce más sobre ti!</h1>
        <p>Recuerda que nuestro objetivo es darte un "pre-diagnostico" de tu estado mental, es importante que respondas con sinceridad todas las preguntas para un resultado más certero</p>

        <p>IMPORTANTE: Este test es una herramienta de autoevaluación que te ayudará a identificar algunos aspectos de tu bienestar emocional, pero no reemplaza un diagnóstico profesional. Para obtener una evaluación completa y precisa, te recomendamos consultar a un profesional de la salud mental.</p>

    </div>
    <br><br>
    <div class="form-container-wrapper">
    <div class="form-container">
        <form action="{{ route('rutaEnviarTest') }}" method="POST">
        @csrf
        <div class="form-title">Test de salud mental</div>
        <x-pregunta
        numero="1"
        texto="Me cuesta mantenerme enfocado en una tarea durante periodos prolongados."
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q1"
    />

    <x-pregunta
        numero="2"
        texto="Tengo problemas para dormir o duermo en exceso. "
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q2"
    />

    <x-pregunta
    numero="3"
    texto="En momentos de mucha energía, siento que puedo lograr cualquier cosa, incluso lo imposible"
    :opciones="[
        'si' => 'Si',
        'no' => 'No'
    ]"
    name="q3"
    />

    <x-pregunta
        numero="4"
        texto="Me siento nervioso o inquieto incluso sin un motivo aparente. "
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q4"
    />

    <x-pregunta
        numero="5"
        texto="A menudo actúo sin pensar en las consecuencias, como hablar fuera de turno o interrumpir a otros.  "
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q5"
    />

    <x-pregunta
        numero="6"
        texto="Siento tensión muscular, como si siempre estuviera en alerta."
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q6"
    />

    <x-pregunta
        numero="7"
        texto="Me siento fatigado o sin energía, incluso después de descansar."
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q7"
    />

    <x-pregunta
        numero="8"
        texto="Durante periodos de alta energía, tengo dificultades para controlar mis impulsos (por ejemplo, gastar dinero excesivamente o hablar demasiado). "
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q8"
    />

    <x-pregunta
        numero="9"
        texto="Me resulta difícil organizar mis actividades o cumplir plazos. "
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q9"
    />

    <x-pregunta
        numero="10"
        texto="Me culpo a mí mismo por cosas que no puedo controlar."
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q10"
    />

    <x-pregunta
        numero="11"
        texto="Mi estado de ánimo cambia repentinamente, afectando mis relaciones o actividades."
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q11"
    />

    <x-pregunta
        numero="12"
        texto="Me distraigo por estímulos a mi alrededor, incluso cuando intento concentrarme."
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q12"
    />

    <x-pregunta
        numero="13"
        texto="Me preocupo excesivamente por situaciones del futuro que no puedo controlar."
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q13"
    />

    <x-pregunta
        numero="14"
        texto="He perdido interés en actividades que antes disfrutaba."
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q14"
    />

    <x-pregunta
        numero="15"
        texto="En algunos periodos, me cuesta tanto motivarme que siento que no puedo realizar las tareas más simples. "
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q15"
    />

    <x-pregunta
        numero="16"
        texto="Me cuesta concentrarme debido a pensamientos constantes o preocupaciones. "
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q16"
    />

    <x-pregunta
        numero="17"
        texto="Tengo problemas para permanecer quieto durante mucho tiempo o siento una necesidad constante de moverme. "
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q17"
    />

    <x-pregunta
        numero="18"
        texto="Tengo dificultad para relajarme, incluso cuando estoy en un lugar tranquilo. "
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q18"
    />

    <x-pregunta
        numero="19"
        texto="Me siento triste o vacío la mayor parte del tiempo. "
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q19"
    />

    <x-pregunta
        numero="20"
        texto="A veces me siento extremadamente enérgico y emocionado, y luego muy triste sin una razón clara. "
        :opciones="[
            'si' => 'Si',
            'no' => 'No'
        ]"
        name="q20"
    />

        <button type="submit" class="button-center">Enviar Test</button>
    </form>
    </div>
    </div>
    <br>
@endsection