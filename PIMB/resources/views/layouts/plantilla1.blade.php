<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental balance</title>
    <link rel="stylesheet" href="{{ asset('css/plantilla.css') }}">
</head>
<body>
    <header class="header">
        <div class="logo-title">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo">
            <h1>Mental Balance</h1>
        </div>
        <a href="{{ route('rutaInicioSesion') }}" class="login-link">Iniciar sesión</a>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <h3>Mental Balance</h3>
        <h5>Todos los derechos reservados</h5>
        <ul>
        <li>Creado por:</li>
        <li>Aguillon Torrijos Estrella</li>
        <li>Martínez Martínez Roberto Uriel</li>
        </ul>
    </footer>
</body>
</html>