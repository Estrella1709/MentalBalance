@extends('layouts.plantilla2')
    @section('contenido')

    <link rel="stylesheet" href="{{ asset('css/cita.css') }}">
    <div class="cita-container">

        <div class="doble-columna">

            <div class="registro-cita">
                <h1>Registra tu cita</h1>

                <label for="fecha">Fecha:</label>
                <select id="fecha" name="fecha">
                    <option value="2024-11-20">20 de noviembre de 2024</option>
                    <option value="2024-11-21">21 de noviembre de 2024</option>
                    <option value="2024-11-22">22 de noviembre de 2024</option>
                </select>

                <label for="hora">Hora:</label>
                <select id="hora" name="hora">
                    <option value="09:00">09:00 AM</option>
                    <option value="11:00">11:00 AM</option>
                    <option value="13:00">01:00 PM</option>
                </select>

                <div class="button-container">
                    <button type="submit" class="btn-custom">Confirmar Cita</button>
                    <button type="button" class="btn-cancel">Cancelar</button>
                </div>
            </div>


            <div class="especialista-info">
                <div class="img-medico">
                    <img src="{{ asset('img/xperfil.png') }}" alt="">
                </div>
                <div class="datos-medico">
                    <h1>Nombre Medico</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At delectus atque cumque 
                        adipisci dolores quia molestiae! Doloremque optio velit, amet doloribus sit dicta 
                        nam nemo minus cum similique! Doloremque, suscipit!
                    </p>
                    <h2>Especialidades</h2>
                    <h3>Antecedentes</h3>
                </div>
            </div>
        </div>
    </div>
@endsection