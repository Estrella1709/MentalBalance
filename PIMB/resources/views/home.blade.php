@extends(auth()->check() && auth()->user()->id_tipo_usuario == 2 ? 'layouts.plantilla2' : 'layouts.plantilla1')


    @section('contenido')

        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <div class="card-home">
        @if(auth()->check() && auth()->user()->id_tipo_usuario == 2)
        <h1 class="bienvenido">Bienvenid@, {{ auth()->user()->nombre }}</h1>
        @else
        <h1 class="bienvenido">¡Bienvenido!</h1>
        @endif
        <p>Si estas en este lugar significa que tienes dudas acerca de tu salud mental, hay que recordar que la salud mental 
        es muy importante, ya que dependiendo cómo estemos mentalmente puede afectar significativamente nuestras vidas,
        empezando por cosas pequeñas como perder el apetito, el insomnio, no querer hacer nada, desmotivación, etc.</p>

        <p>Si bien, no puedes auto diagnosticarte, es importante que sepas detectar cuáles cosas han pasado en tu vida que ponen en riesgo tu salud mental, es por eso que te ayudaremos!</p>

        <p>Esta aplicación web esta destinado a personas que no saben a donde ir mientras dudan de tener una buena salud mental,
        los que tienen dudas son bienvenidos, y sino también son bienvenidos a conocer más sobre la salud mental y por qué es
        tan importante como la salud física.</p>
    </div>
        <br>
        <br>
        <h2>¿Conoces alguna de estas enfermedades mentales?</h2>
        <div class="card-container">
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <h3>Ansiedad</h3>
                        <div class="card-image">
                            <img src="{{ asset('img/ansiedad.jpg') }}" alt="Ansiedad">
                        </div>
                    </div>
                    <div class="card-back">
                        <p>La andiedad es una respuesta emocional a situaciones estresantes o desconocidas, que se manifiesta con preocupaciones excesivas, nerviosismo o miedo.</p>
                        <button onclick="window.location.href='{{ route('rutaInfoAnsiedad')}}'">Leer más</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <h3>Depresión</h3>
                        <div class="card-image">
                            <img src="{{ asset('img/Depresion.png') }}" alt="Depresión">
                        </div>
                    </div>
                    <div class="card-back">
                        <p>Es un trastorno del estado de ánimo caracterizado por tristeza persistente, pérdida de interés en actividades diarias y fatiga extrema.</p>
                        <button onclick="window.location.href='{{ route('rutaInfoDepresion')}}'">Leer más</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <h3>TDAH</h3>
                        <div class="card-image">
                            <img src="{{ asset('img/tdah.jpg') }}" alt="TDAH">
                        </div>
                    </div>
                    <div class="card-back">
                        <p>Es un trastorno neuropsiquiátrico caracterizado por dificultades para mantener la atención, impulsividad y, en algunos casos, hiperactividad.</p>
                        <button onclick="window.location.href='{{ route('rutaInfoTDAH')}}'">Leer más</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <h3>Bipolaridad</h3>
                        <div class="card-image">
                            <img src="{{ asset('img/bipolaridad.jpg') }}" alt="Bipolaridad">
                        </div>
                    </div>
                    <div class="card-back">
                        <p>Es un trastorno del estado de ánimo que causa cambios extremos en el humor, pasando de episodios de euforia (manía) a tristeza profunda (depresión).</p>
                        <button onclick="window.location.href='{{ route('rutaInfoBipolaridad')}}'">Leer más</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <h2>
            {{ $loggedIn ? '¡Realiza un formulario para saber el estado de tu salud mental!' : '¡Inicia sesión para saber más de tu salud mental!' }}
        </h2>
        <button type="button" class="button-center" 
            onclick="window.location.href='{{ $loggedIn ? route('rutaFormulario') : route('rutaInicioSesion') }}'">
            {{ $loggedIn ? 'Realizar Test' : 'Iniciar sesión' }}
        </button>
        
        

    @endsection