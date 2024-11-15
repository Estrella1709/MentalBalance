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
            <form action="#" method="post">
                <div class="form-group">
                    <input type="text" placeholder="Nombre" required>
                    <input type="text" placeholder="Apellido Paterno" required>
                    <input type="text" placeholder="Apellido Materno" required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Correo electrónico" required>
                    <input type="text" placeholder="Teléfono" required>
                    <input type="date" placeholder="Fecha de nacimiento" required>
                </div>
                <div class="form-group">
                    
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Contraseña" required>
                    <input type="password" placeholder="Confirmar contraseña" required>
                </div>
                <div class="user-type">
                    <label><h4>Tipo usuario</h4></label>
                    <label><input type="radio" name="user-type" value="medico"> Médico</label>
                    <label><input type="radio" name="user-type" value="paciente"> Paciente</label>
                </div>

                <div class="buttons">
                    <a href="#" class="login-link">¿Ya tienes cuenta? Inicia sesión</a>
                    <button type="submit">Ingresar</button>   
                </div>
                
            </form>
            
        </div>
    </div>
</body>
</html>
