@extends(auth()->check() && auth()->user()->id_tipo_usuario == 2 ? 'layouts.plantilla2' : 'layouts.plantilla1')

    @section('contenido')

<link rel="stylesheet" href="{{ asset('css/infoenf.css') }}">
    <div class="doble-columna">
        <div class="card-efermedad">
            <div class="card-body">
                <h1 class="titulo">Ansiedad</h1>
                <text class="content">
                La ansiedad es una emoción natural que todos experimentamos en situaciones de estrés o incertidumbre. Sin embargo, cuando la ansiedad se vuelve excesiva o crónica, puede convertirse en un trastorno. Este trastorno se caracteriza por una preocupación constante e irracional sobre situaciones cotidianas, acompañada de síntomas físicos como palpitaciones, sudoración, temblores, tensión muscular y dificultades para respirar. Los trastornos de ansiedad más comunes incluyen el Trastorno de Ansiedad Generalizada (TAG), los trastornos de pánico, las fobias y la ansiedad social. Las personas con ansiedad pueden sentirse constantemente en alerta, lo que puede interferir con su capacidad para funcionar en la vida diaria.

                </text>
            </div>
        </div>
        <div class="img-container">
            <img src="{{ asset('img/xansiedad.png') }}" alt="">
        </div>
    </div>

    <div class="consejos-container">
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                Practica técnicas de relajación como la meditación o la respiración profunda.
                </text>
            </div>
        </div>
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                Mantén una rutina regular de ejercicio físico para reducir el estrés.
                </text>
            </div>
        </div>
        <div class="card-consejos">
            <div class="consejos-body">
                <h1 class="hconsejos">Consejos</h1>
                <text class="tconsejos">
                Establece límites saludables y busca apoyo social o profesional si es necesario.
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