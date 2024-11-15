<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Balance</title>
    <link rel="stylesheet" href="{{ asset('css/registroM.css')}}">
</head>
<body>
    <div class="container">
        <h1 class="main-title">Mental Balance</h1>
        <div class="login-card">
            <div class="logo-container">
                <img src="{{ asset('img/logo.png')}}" alt="Logo" class="logo">
            </div>
            <h2>Registro</h2>
            <form action="#" method="post">
                <input type="text" placeholder="Cédula Profesional" required>
                <input type="text" placeholder="Especialidad" required>
                <button type="submit">Ingresar</button>
            </form>
            <a href="#" class="register-link">¿Ya tienes cuenta? Inicia Sesión</a>
        </div>
    </div>
</body>
</html>