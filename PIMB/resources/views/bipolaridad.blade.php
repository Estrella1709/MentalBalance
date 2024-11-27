@extends(auth()->check() && auth()->user()->id_tipo_usuario == 2 ? 'layouts.plantilla2' : 'layouts.plantilla1')
    @section('contenido')

<link rel="stylesheet" href="{{ asset('css/infoenf.css') }}">
    <div class="doble-columna">
        <div class="card-efermedad">
            <div class="card-body">
                <h1 class="titulo">Bipolaridad</h1>
                <text class="content">
                El Trastorno Bipolar es un trastorno mental caracterizado por cambios extremos en el estado de ánimo. Las personas con bipolaridad experimentan episodios de manía (una fase de euforia, energía elevada e impulsividad) y episodios de depresión (fases de tristeza profunda y agotamiento). Estos cambios de ánimo pueden ocurrir de manera abrupta y durar días, semanas o incluso meses. Existen diferentes tipos de trastorno bipolar, incluyendo el Trastorno Bipolar I, que se caracteriza por episodios de manía y depresión, y el Trastorno Bipolar II, que implica episodios de hipomanía (una forma más leve de manía) y depresión mayor.

                    
                </text>
            </div>
        </div>
        <div class="img-container">
            <img src="{{ asset('img/xbipolaridad.png') }}" alt="">
        </div>
    </div>

    <div class="consejos-container">
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                Mantén una rutina regular de sueño y alimentación para estabilizar el estado de ánimo.
                </text>
            </div>
        </div>
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                Identifica los signos tempranos de los cambios de humor para actuar rápidamente.
                </text>
            </div>
        </div>
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                Sigue el tratamiento médico de manera consistente, incluidas las medicaciones.
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