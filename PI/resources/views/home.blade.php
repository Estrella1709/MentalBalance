@extends('layouts.app')
@section('content')
<div class="card-home">
    <!-- Imagen a lo ancho de la página -->
    <img src="{{ asset('img/image.png') }}" alt="Mental Balance Building" class="header-image mt-3">
    <!-- Sección de Bienvenida -->
    <div class="jumbotron text-center" style="background-color: var(--background-color);">
        <h1 class="display-4">Bienvenidos a Mental Balance</h1>
        <p class="lead">Al servicio de tu salud</p>
    </div>
</div>
        <h2>¿Conoces alguna de estas enfermedades mentales?</h2>
        <div class="card-container mt-5 mb-5">
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <h3>Ansiedad</h3>
                        <div class="card-image">
                            <img src="{{ asset('img/ansiedad.jpg') }}" alt="Ansiedad">
                        </div>
                    </div>
                    <div class="card-back">
                        <p>Información sobre ansiedad...</p>
                        <a href="{{ route('rutaInfoAnsiedad')}}" >Leer más</a>
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
                        <p>Información sobre depresión...</p>
                        <a href="{{ route('rutaInfoDepresion')}}" >Leer más</a>
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
                        <p>Información sobre TDAH...</p>
                        <a href="{{ route('rutaInfoTDAH')}}" >Leer más</a>
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
                        <p>Información sobre bipolaridad...</p>
                        <a href="{{ route('rutaInfoBipolaridad')}}" >Leer más</a>
                    </div>
                </div>
            </div>
        </div>


    <!-- Sección de Servicios Destacados -->
    <div class="container mt-10">

    <h2>¡Haz un test para saber como está tu salud mental!</h2>
    <button type="submit" class="button-center mb-5">Realizar Test</button>

        <h2 class="text-center mb-4" style="color: var(--primary-color);">Nuestros Servicios</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <h4 style="color: var(--accent-color);">Psicoterapia</h4>
                <p>Ofrecemos terapias individuales, familiares y de pareja.</p>
            </div>
            <div class="col-md-4 text-center">
                <h4 style="color: var(--accent-color);">Psiquiatría</h4>
                <p>Evaluación y tratamiento médico especializado.</p>
            </div>
            <div class="col-md-4 text-center">
                <h4 style="color: var(--accent-color);">Asesoramiento</h4>
                <p>Apoyo para el manejo de estrés, ansiedad y otros trastornos.</p>
            </div>
        </div>
    </div>
    <!-- Sección de Llamada a la Acción -->
    <div class="card-back my-5">
        <p>¿Interesado en saber más?</p>
        <a href="#">Agenda una Cita</a>
    </div>
@endsection