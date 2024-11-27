@extends(auth()->check() && auth()->user()->id_tipo_usuario == 2 ? 'layouts.plantilla2' : 'layouts.plantilla1')
    @section('contenido')

<link rel="stylesheet" href="{{ asset('css/infoenf.css') }}">
    <div class="doble-columna">
        <div class="card-efermedad">
            <div class="card-body">
                <h1 class="titulo">Depresión</h1>
                <text class="content">
                La depresión es un trastorno del estado de ánimo que afecta tanto a la mente como al cuerpo. Las personas con depresión sienten una tristeza profunda y persistente que puede durar semanas, meses o incluso años. Además de la tristeza, la depresión puede provocar pérdida de interés en actividades previamente placenteras, fatiga extrema, sentimientos de desesperanza, culpa excesiva y dificultades para concentrarse. En algunos casos, también puede haber pensamientos suicidas. Este trastorno puede ser causado por una combinación de factores genéticos, bioquímicos y ambientales, como el estrés crónico o experiencias traumáticas.

                   
                </text>
            </div>
        </div>
        <div class="img-container">
            <img src="{{ asset('img/xdepresion.png') }}" alt="">
        </div>
    </div>

    <div class="consejos-container">
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                Mantén una rutina diaria para estructurar tu día y evitar caer en la inactividad.
                </text>
            </div>
        </div>
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                Habla con alguien de confianza o busca terapia profesional.
                </text>
            </div>
        </div>
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                Haz ejercicio regularmente, ya que mejora el estado de ánimo al liberar endorfinas.
                </text>
            </div>
        </div>
    </div>
    
    <div class="logged-message">
        @auth
        
            <h1>¡Consulta con un especialista!</h1>
            <p>
            Contamos con especialistas que te ayudarán a darle un seguimiento más profesional a tu salud mental
            </p>
            <div class="button-container">
                <button class="btn-custom">Directorio de especialistas</button>
            </div>
            
        @endauth
    </div>

@endsection