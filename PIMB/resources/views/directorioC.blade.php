@extends('layouts.plantilla2')
@section('contenido')

<link rel="stylesheet" href="{{ asset('css/directorioC.css') }}">
<div class="content">
    <div class="left-panel">

        <div class="prox-citas-container">
            <h2 class="prox-citas">Nuestros especialistas</h2>
        </div>

        <!-- Mostrar los médicos desde la base de datos -->
        @foreach ($medicos as $medico)
            <div class="appointment-item" onclick="showDetails('{{ $medico->user->nombre }} {{ $medico->user->apellidoP }} {{ $medico->user->apellidoM }}', '{{ $medico->cedula }}', '{{ $medico->especialidad->tipo }}', '{{ $medico->descripcion }}', '{{ asset($medico->user->imagen) }}')">
                <div class="appointment-info">
                    <p>{{ $medico->user->nombre }} {{ $medico->user->apellidoP }} {{ $medico->user->apellidoM }}</p> <!-- Nombre del especialista -->
                    <span>{{ $medico->especialidad->tipo }}</span> <!-- Especialidad -->
                </div>
            </div>
        @endforeach

    </div>

    <div class="right-panel">
        <h2 class="prox-citas">Detalles del especialista</h2>

        <div class="detalles-pacientes">
            <div class="details-container">
                <div class="appointment-info">
                    <div class="details-info">
                        <p>Nombre del especialista: <span id="nombre-especialista"></span></p>
                        <br>
                        <p>Cédula profesional: <span id="cedulaProfesional"></span></p>
                        <br>
                        <p>Especialidad: <span id="especialidad"></span></p>
                        <br>
                        <p>Descripción: <span id="descripcion"></span></p>
                    </div>
                </div>
                <div class="profile-picture">
                    <img id="profile-picture" src="default-profile.png" alt="Foto de perfil">
                </div>
            </div>
        </div>

        <div id="recipes-section">
            <h3 class="prox-citas">Solicita una cita</h3>
            <div class="container-cita">
                <form action="">
                    <p>Ingresa la fecha de tu cita</p>
                    <input type="date" name="fecha_cita" placeholder="Fecha de cita" value="{{ old('fecha_cita') }}">

                    <p>Ingresa una hora para tu cita</p>
                    <input type="time" id="hora_cita">

                        <div class="user-type">
                        <p>Elige tu tipo de cita</p>
                        <select name="tipoCita" id="tipocita"> <!-- Aquí aseguramos que el nombre coincida con el que espera el controlador -->
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="1">Llamada</option>
                            <option value="2">Videollamada</option>           
                        </select>
                    </div>

                    <br><br>
                    <button>Solicitar</button>
                </form>
            </div>
        </div>

    </div>
</div>

<script src="{{ asset('js/directorioC.js') }}"></script>

@endsection
