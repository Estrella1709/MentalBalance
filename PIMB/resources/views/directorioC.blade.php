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
            <div class="appointment-item" onclick="showDetails('{{ $medico->user->nombre }} {{ $medico->user->apellidoP }} {{ $medico->user->apellidoM }}', '{{ $medico->cedula }}', '{{ $medico->especialidad->tipo }}', '{{ $medico->descripcion }}', '{{ asset($medico->user->imagen) }}', {{ $medico->id }})">
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
            <form method="POST" action="{{ route('citas.store') }}">
                @csrf
                <input type="hidden" name="id_medico" id="id-medico"> <!-- Campo oculto para el médico -->
                
                <p>Ingresa la fecha de tu cita</p>
                <input type="date" name="fecha_cita" placeholder="Fecha de cita" value="{{ old('fecha_cita') }}">
                @error('fecha_cita')
                    <div style="color: red;">{{ $message }}</div>
                @enderror

                <p>Ingresa una hora para tu cita</p>
                <input type="time" name="hora_cita" id="hora_cita">
                @error('hora_cita')
                    <div style="color: red;">{{ $message }}</div>
                @enderror

                <div class="user-type">
                    <p>Elige tu tipo de cita</p>
                    <select name="tipoCita" id="tipocita">
                        <option value="" disabled selected>Selecciona una opción</option>
                        <option value="1">Llamada</option>
                        <option value="2">Videollamada</option>
                    </select>
                    @error('tipoCita')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <br><br>
                <button type="submit">Solicitar</button>
            </form>

            </div>
        </div>

    </div>
</div>

<script src="{{ asset('js/directorioC.js') }}"></script>

@endsection
