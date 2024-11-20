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
        texto="¿Cómo describirías tu nivel de energía en los últimos meses?"
        :opciones="[
            'a' => 'a) Alta energía constante.',
            'b' => 'b) Energía fluctuante entre muy alta y muy baja.',
            'c' => 'c) Baja energía la mayor parte del tiempo.',
            'd' => 'd) Energía baja con ocasionales subidas de energía.'
        ]"
        name="q1"
    />

    <x-pregunta
        numero="2"
        texto="¿Con qué frecuencia experimentas dificultades para concentrarte?"
        :opciones="[
            'a' => 'a) Rara vez o nunca.',
            'b' => 'b) Algunas veces, especialmente en situaciones estresantes.',
            'c' => 'c) Frecuentemente, siento que mi mente está en otra parte.',
            'd' => 'd) Casi todo el tiempo, es un reto constante.'
        ]"
        name="q2"
    />

    <x-pregunta
    numero="3"
    texto="¿Te sientes preocupado o ansioso sin motivo aparente?"
    :opciones="[
        'a' => 'a) No, solo cuando hay una razón clara.',
        'b' => 'b) A veces, pero lo gestiono bien.',
        'c' => 'c) Frecuentemente, y me resulta difícil manejarlo.',
        'd' => 'd) Constantemente, me domina y me impide funcionar bien.'
    ]"
    name="q3"
    />

    <x-pregunta
        numero="4"
        texto="¿Cómo son tus patrones de sueño?"
        :opciones="[
            'a' => 'a) Regulares y satisfactorios.',
            'b' => 'b) Dificultades ocasionales para dormir.',
            'c' => 'c) Despertar en medio de la noche y tener problemas para volver a dormir.',
            'd' => 'd) Insomnio constante o dormir en exceso.'
        ]"
        name="q4"
    />

    <x-pregunta
        numero="5"
        texto="¿Cómo describirías tu estado de ánimo general?"
        :opciones="[
            'a' => 'a) Mayormente positivo.',
            'b' => 'b) Varía entre muy positivo y muy negativo.',
            'c' => 'c) Persistente sensación de tristeza.',
            'd' => 'd) Irritable y con cambios de humor repentinos.'
        ]"
        name="q5"
    />

    <x-pregunta
        numero="6"
        texto="¿Con qué frecuencia te sientes abrumado por tus responsabilidades?"
        :opciones="[
            'a' => 'a) Rara vez, manejo bien mis obligaciones.',
            'b' => 'b) Algunas veces, pero lo logro controlar.',
            'c' => 'c) Frecuentemente me siento sobrepasado.',
            'd' => 'd) Casi siempre, me resulta muy difícil gestionar el día a día.'
        ]"
        name="q6"
    />

    <x-pregunta
        numero="7"
        texto="¿Cómo manejas el estrés?"
        :opciones="[
            'a' => 'a) Encuentro formas saludables de liberarlo.',
            'b' => 'b) A veces me cuesta, pero lo consigo.',
            'c' => 'c) Generalmente, me siento agobiado y sin salida.',
            'd' => 'd) No lo manejo bien, me afecta gravemente.'
        ]"
        name="q7"
    />

    <x-pregunta
        numero="8"
        texto="¿Tienes pensamientos negativos recurrentes?"
        :opciones="[
            'a' => 'a) No, solo de vez en cuando y los supero rápidamente.',
            'b' => 'b) A veces, pero los controlo bien.',
            'c' => 'c) Frecuentemente, y es difícil detenerlos.',
            'd' => 'd) Constantemente, son intrusivos y me afectan diariamente.'
        ]"
        name="q8"
    />

    <x-pregunta
        numero="9"
        texto="¿Te resulta difícil disfrutar de las actividades que antes te gustaban?"
        :opciones="[
            'a' => 'a) No, sigo disfrutando de mis pasatiempos.',
            'b' => 'b) Algunas veces, pero trato de motivarme.',
            'c' => 'c) Frecuentemente me cuesta encontrar placer en ellas.',
            'd' => 'd) Ya no disfruto nada de lo que antes me apasionaba.'
        ]"
        name="q9"
    />

    <x-pregunta
        numero="10"
        texto="¿Cómo describirías tu relación con las personas cercanas?"
        :opciones="[
            'a' => 'a) Muy buena, siento apoyo y conexión.',
            'b' => 'b) Buena en general, pero con altibajos.',
            'c' => 'c) A menudo me siento distanciado o incomprendido.',
            'd' => 'd) Me siento solo y desconectado de los demás.'
        ]"
        name="q10"
    />

    <x-pregunta
        numero="11"
        texto="¿Con qué frecuencia tienes episodios de pérdida de interés o motivación?"
        :opciones="[
            'a' => 'a) Rara vez, siempre encuentro algo que me motive.',
            'b' => 'b) Ocasionalmente, pero los supero.',
            'c' => 'c) Frecuentemente, me cuesta empezar cualquier actividad.',
            'd' => 'd) Casi todo el tiempo, me siento sin propósito.'
        ]"
        name="q11"
    />

    <x-pregunta
        numero="12"
        texto="¿Sientes algún cambio importante en tu apetito?"
        :opciones="[
            'a' => 'a) No, mi apetito es regular.',
            'b' => 'b) Leves cambios, pero sin preocupaciones.',
            'c' => 'c) He perdido el apetito o como en exceso a menudo.',
            'd' => 'd) Mi apetito ha cambiado drásticamente y me preocupa.'
        ]"
        name="q12"
    />

        <button type="submit" class="button-center">Enviar Test</button>
    </form>
    </div>
    </div>
    <br>
@endsection