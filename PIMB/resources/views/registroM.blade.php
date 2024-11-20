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
            <form action="{{ route('rutaProcesarRegistroMedico') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="cedula_profesional" placeholder="Cédula Profesional" value="{{ old('cedula_profesional') }}">
                    @error('cedula_profesional')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="especialidad" placeholder="Especialidad" value="{{ old('especialidad') }}">
                    @error('especialidad')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="buttons">
                    <button type="submit">Terminar registro</button>   
                </div>
            </form>
        </div>
    </div>
</body>
</html>