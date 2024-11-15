<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Balance</title>
    <link rel="stylesheet" href="{{ asset('css/inicioSesion.css')}}">
</head>
<body>
    <div class="container">
        <h1 class="main-title">Mental Balance</h1>
        <div class="login-card">
            <div class="logo-container">
                <img src="{{ asset('img/logo.png')}}" alt="Logo" class="logo">
            </div>
            <h2>Inicio de sesión</h2>
            <form action="{{ route('rutaProcesarInicioSesion') }}" method="post">
            @csrf
            <input type="txt" name="email" placeholder="Correo electrónico" value="{{ old('email') }}">
            @error('email')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <input type="password" name="password" placeholder="Contraseña">
            @error('password')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <button type="submit">Ingresar</button>
            </form>
            <a href="#" class="register-link">¿No tienes cuenta? Regístrate</a>
        </div>
    </div>
</body>
</html>