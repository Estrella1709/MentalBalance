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
    <div class="appointment-item" onclick="showDetails(
        '{{ $medico->user ? $medico->user->nombre . ' ' . $medico->user->apellidoP . ' ' . $medico->user->apellidoM : 'Nombre no disponible' }}', 
        '{{ $medico->cedula }}', 
        '{{ $medico->especialidad ? $medico->especialidad->tipo : 'Especialidad no disponible' }}', 
        '{{ $medico->descripcion }}', 
        '{{ $medico->user && $medico->user->imagen ? asset($medico->user->imagen) : asset('img/default-profile.png') }}')">
        <div class="appointment-info">
            <p>{{ $medico->user ? $medico->user->nombre . ' ' . $medico->user->apellidoP . ' ' . $medico->user->apellidoM : 'Nombre no disponible' }}</p> <!-- Nombre del especialista -->
            <span>{{ $medico->especialidad ? $medico->especialidad->tipo : 'Especialidad no disponible' }}</span> <!-- Especialidad -->
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
                <form action="{{ route('citas.store') }}" method="POST">
                    @csrf

                    <input type="hidden" name="medico_id" id="medico_id">
                    <input type="hidden" name="paciente_id" id="paciente_id">

                    <p>Ingresa la fecha de tu cita</p>
                    <input type="date" name="fecha_cita" placeholder="Fecha de cita" value="{{ old('fecha_cita') }}"><br>
                    @error('fecha_cita')
                        <span class="error-message">{{ $message }}</span>
                    @enderror

                    <p>Ingresa una hora para tu cita</p>
                    <input type="time" name="hora_cita" id="hora_cita" value="{{ old('hora_cita') }}"><br>
                    @error('hora_cita')
                        <span class="error-message">{{ $message }}</span>
                    @enderror

                    <div class="user-type">
                        <p>Elige tu tipo de cita</p>
                        <select name="tipoCita" id="tipoCita"> <!-- Aquí aseguramos que el nombre coincida con el que espera el controlador -->
                        <option value="" disabled selected>Selecciona una opción</option>
                        <option value="1" {{ old('tipoCita') == '1' ? 'selected' : '' }}>Ansiedad</option>
                        <option value="2" {{ old('tipoCita') == '2' ? 'selected' : '' }}>Bipolaridad</option>
                        </select>
                        <br>
                        @error('tipoCita')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
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
