@extends('layouts.plantilla2')
@section('contenido')

<link rel="stylesheet" href="{{ asset('css/citas.css') }}">
<div class="content">
    <div class="left-panel">

        <div class="prox-citas-container">
            <h2 class="prox-citas">¡Consulta tus citas!</h2>
        </div>

        <!-- Mostrar los médicos desde la base de datos -->
        
            <div class="appointment-item" onclick="showDetails('Nombre Especialista', 'Nombre Paciente', 'Fecha de cita', 'Hora cita', 'tipo cita', 'Estado')">
                <div class="appointment-info">
                    <p>Cita con:  </p> <!-- Nombre del especialista -->
                    <span>Fecha:    Hora:</span> <!-- Especialidad -->
                </div>
                <button class="cancel-cita">Cancelar cita</button>
            </div>
        

    </div>

    <div class="right-panel">
        <h2 class="prox-citas">Detalles de la cita</h2>

        <div class="detalles-pacientes">
            <div class="details-container">
                <div class="appointment-info">
                    <div class="details-info">
                        <p>Nombre del especialista: <span id="nombre-especialista"></span></p>
                        <br>
                        <p>Nombre de paciente: <span id="nombre-paciente"></span></p>
                        <br>
                        <p>Fecha: <span id="fecha"></span></p>
                        <br>
                        <p>Hora: <span id="hora"></span></p>
                        <br>
                        <p>Tipo de cita: <span id="tipo-cita"></span></p>
                        <br>
                        <p>Estado de cita: <span id="estado"></span></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="{{ asset('js/citas.js') }}"></script>

@endsection
