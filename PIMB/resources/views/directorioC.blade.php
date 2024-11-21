@extends('layouts.plantilla2')
    @section('contenido')
   
    <link rel="stylesheet" href="{{ asset('css/directorioC.css') }}">
    <div class="content">
        <div class="left-panel">

            <div class="prox-citas-container">
                <h2 class="prox-citas">Nuestros especialistas</h2>
            </div>


            <!-- la funcion de showDetails es para que se muestren los detalles del paciente, esos datos son lo que saldran dependiendo de los datos que tenga la bd, la imagen podemos verla despues para que salgan xd -->
            <div class="appointment-item" onclick="showDetails('Aguillon Torrijos Estrella', 'CEDULA', 'ANSIEDAD', 'LLEVO AÑOS TRATANDO GENTE CON ANSIEDAD', 'img/hoshii.png')">
                                                                <!-- Nombre especialista --> <!-- Cedula profesional --> <!-- Especialidad --> <!-- Descripción -->
                <div class="appointment-info">
                    <!-- Nombre que se muestra dependiendo de la bd -->
                    <p>Aguillon Torrijos Estrella</p>

                    <!-- especialidad que se muestra dependiendo de la bd -->
                    <span>Especialidad</span>
                </div>
            </div>

        </div>

        <!-- Este es el lado donde de mostraran los detalles del paciente, las recetas y citas -->
        <div class="right-panel">
            <h2 class="prox-citas">Detalles del especialista</h2>

            <!-- Este es el contenedor de los detalles del paciente, se conecta a la bd -->
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
       
            <!-- contenedor para crear una cita-->
            <div id="recipes-section">
                <h3 class="prox-citas">Solicita una cita</h3>
                <!-- Esta es la tarjeta que muestra laS RECETAS, se conecta a la bd -->
                <div class="container-cita">
                    <form action="">
                        <p>Ingresa la fecha de tu cita</p>
                        <input type="date" name="fecha_cita" placeholder="Fecha de cita" value="{{ old('fecha_cita') }}">

                        <p>Ingresa una hora para tu cita</p>
                        <input type="time" id="hora_cita">
                        <br>
                        <br>
                        <button>Solicitar</button>
                    </form>
                    
                </div>

            </div>
            
        </div>
    </div>
</div>

<script src="{{ asset('js/directorioC.js') }}"></script>

@endsection