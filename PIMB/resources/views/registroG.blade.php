<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Balance</title>
    <link rel="stylesheet" href="{{ asset('css/registroG.css')}}">
</head>
<body>
<div class="container">
        <h1 class="main-title">Mental Balance</h1>
        <div class="register-card">
            <div class="header">
                <h2>Registro</h2>
                <div class="logo-container">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo">
                </div>
            </div>
            <form action="{{ route('rutaProcesarRegistroGeneral') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
                    @error('nombre')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror

                    <input type="text" name="apellido_paterno" placeholder="Apellido Paterno" value="{{ old('apellido_paterno') }}">
                    @error('apellido_paterno')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror

                    <input type="text" name="apellido_materno" placeholder="Apellido Materno" value="{{ old('apellido_materno') }}">
                    @error('apellido_materno')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="email" placeholder="Correo electrónico" value="{{ old('email') }}">
                    @error('email')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror

                    <input type="text" name="telefono" placeholder="Teléfono" value="{{ old('telefono') }}">
                    @error('telefono')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror

                    <input type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento" value="{{ old('fecha_nacimiento') }}">
                    @error('fecha_nacimiento')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Contraseña">
                    @error('password')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror

                    <input type="password" name="password_confirmation" placeholder="Confirmar contraseña">
                </div>
                <div class="user-type">
                <label><h4>Tipo usuario</h4></label>
                <label><input class="opcion" type="radio" name="user-type" value="1" {{ old('user-type') == '1' ? 'checked' : '' }}> Médico</label>
                <label><input class="opcion" type="radio" name="user-type" value="2" {{ old('user-type') == '2' ? 'checked' : '' }}> Paciente</label>
                @error('user-type')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
                </div>


                <div class="buttons">
                    <a href="{{ route('rutaInicioSesion') }}" class="login-link">&#191;Ya tienes cuenta? Inicia sesión</a>
                    <button type="submit">Registrar</button>   
                </div>
            </form>
            
        </div>
    </div>

    
</body>
</html>
