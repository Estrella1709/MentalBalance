@extends('layouts.plantilla2')
@section('contenido')

<link rel="stylesheet" href="{{ asset('css/citas.css') }}">
<div class="content">
    <div class="left-panel">

        <div class="prox-citas-container">
            <h2 class="prox-citas">¡Consulta tus citas!</h2>
        </div>

        <!-- Mostrar las citas desde la base de datos -->
        @foreach ($citas as $cita)
            <div class="appointment-item" onclick="showDetails('{{ $cita->medico->user->nombre }} {{ $cita->medico->user->apellidoP }} {{ $cita->medico->user->apellidoM }}', '{{ $cita->paciente->user->nombre }} {{ $cita->paciente->user->apellidoP }} {{ $cita->paciente->user->apellidoM }}', '{{ $cita->fecha }}', '{{ $cita->hora }}', '{{ $cita->tipoCita->tipo }}', '{{ $cita->estadoCita->tipo }}')">
                <div class="appointment-info">
                    <p>Cita con: {{ $cita->medico->user->nombre }} {{ $cita->medico->user->apellidoP }} {{ $cita->medico->user->apellidoM }}</p>
                    <span>Fecha: {{ $cita->fecha }}  Hora: {{ $cita->hora }}</span>
                </div>
                <form action="{{ route('citas.destroy', $cita->id) }}" method="POST">
                @csrf
                    @method('DELETE')
                    <button type="submit" class="cancel-cita">Cancelar cita</button>
                </form>

            </div>
        @endforeach

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

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const eliminarBotones = document.querySelectorAll('.cancel-cita');

    eliminarBotones.forEach(boton => {
        boton.addEventListener('click', function (e) {
            e.preventDefault(); // Evita que el formulario se envíe inmediatamente

            const form = this.closest('form');

            Swal.fire({
                title: '<span style="color:#398F9D;">¿Estás segur@ de que quieres cancelar la cita?</span>',
                html: `<p style="font-size: 18px; color: #398F9D;">Esta opción no se puede revertir!</p>`,
                imageUrl: '{{ asset('img/logo.png') }}',
                imageWidth: 150,
                imageHeight: 150,
                imageAlt: 'Imagen de error',
                showCancelButton: true,
                background: '#eaf7f8',
                color: '#d32f2f',
                confirmButtonColor: '#398F9D',
                cancelButtonColor: '#233abd',
                confirmButtonText: 'Sí, cancelar la cita',
                cancelButtonText: 'No, no quiero cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        imageUrl: '{{ asset('img/logo.png') }}',
                        imageWidth: 150,
                        imageHeight: 150,
                        imageAlt: 'Imagen de éxito',
                        title: '<h3 style="color:#398F9D;">Cita cancelada correctamente</h3>',
                        confirmButtonText: 'Entendido',
                        background: '#eaf7f8',
                        color: '#7fe2f1',
                        confirmButtonColor: '#398F9D',
                    }).then(() => {
                        form.submit(); // Ahora sí, se envía el formulario después de la confirmación
                    });
                }
            });
        });
    });
});

</script>
@endsection
