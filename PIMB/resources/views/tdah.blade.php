@extends(auth()->check() && auth()->user()->id_tipo_usuario == 2 ? 'layouts.plantilla2' : 'layouts.plantilla1')
    @section('contenido')

<link rel="stylesheet" href="{{ asset('css/infoenf.css') }}">
    <div class="doble-columna">
        <div class="card-efermedad">
            <div class="card-body">
                <h1 class="titulo">TDAH</h1>
                <text class="content">
                    <p>El Trastorno por Déficit de Atención e Hiperactividad (TDAH) es un trastorno neuropsiquiátrico que afecta principalmente la capacidad de las personas para concentrarse, controlar impulsos y regular su nivel de actividad. Es comúnmente diagnosticado en la infancia, aunque puede persistir en la edad adulta. Las personas con TDAH suelen tener dificultades para mantener la atención en tareas, ser fácilmente distraídas, y pueden mostrar comportamientos impulsivos, como interrumpir conversaciones o tomar decisiones sin pensar en las consecuencias. En algunos casos, también pueden ser hiperactivas, lo que significa que tienen una necesidad constante de moverse.

</p>
                
            </div>
        </div>
        <div class="img-container">
            <img src="{{ asset('img/xtdah.png') }}" alt="">
        </div>
    </div>

    <div class="consejos-container">
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                Establece una rutina clara y usa recordatorios visuales para mantener el enfoque.
                </text>
            </div>
        </div>
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                Divide las tareas en pasos pequeños para evitar sentirse abrumado.
                </text>
            </div>
        </div>
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                Practica técnicas de manejo de impulsos, como pausas o respiración profunda, antes de tomar decisiones rápidas.
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