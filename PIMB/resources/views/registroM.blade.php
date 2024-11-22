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
            <form action="{{ route('rutaProcesarRegistroMedico') }}" method="POST">
            @csrf

                <input type="hidden" name="user_id" value="{{ $user_id }}">

                <div class="user-type">
                    <label for="especialidad"><h4>Especialidad</h4></label>
                    <select name="especialidad" id="especialidad"> <!-- Aquí aseguramos que el nombre coincida con el que espera el controlador -->
                        <option value="" disabled selected>Selecciona una opción</option>
                        <option value="1" {{ old('especialidad') == '1' ? 'selected' : '' }}>Ansiedad</option>
                        <option value="2" {{ old('especialidad') == '2' ? 'selected' : '' }}>Bipolaridad</option>
                        <option value="3" {{ old('especialidad') == '3' ? 'selected' : '' }}>Depresión</option>
                        <option value="4" {{ old('especialidad') == '4' ? 'selected' : '' }}>TDAH</option>
                    </select>
                    @error('especialidad')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>




                <div class="form-group">
                    <input type="text" name="cedula_profesional" placeholder="Cédula Profesional" value="{{ old('cedula_profesional') }}">
                    @error('cedula_profesional')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <input type="text" name="descripcion" placeholder="Escribe una breve descripción de tu trabajo" value="{{ old('descripcion') }}">
                    @error('descripcion')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                    <button type="submit">Terminar registro</button>   
                
            </form>
        </div>
    </div>
</body>
</html>