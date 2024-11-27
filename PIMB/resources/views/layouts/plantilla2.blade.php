<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental balance</title>
    <link rel="stylesheet" href="{{ asset('css/plantilla.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <header class="header">
        <div class="logo-title">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo">
            <h1>Mental Balance</h1>
        </div>
        <div class="nav-links">
        <a href="{{ route('rutaHome') }}" class="login-link">Inicio</a>
        <a href="{{ route('rutaPreDiagnostico') }}" class="login-link">Mi pre-diagnóstico</a>
        <a href="{{ route('rutaDirectorio') }}" class="login-link">Directorio</a>
        <a href="{{ route('rutaCitas') }}" class="login-link">Mis citas</a>
        <form action="{{ route('rutaCerrarSesion') }}" method="POST" style="display: inline;">
        @csrf
            <button type="submit" class="logout-button">Cerrar sesión</button>
        </form>

    </div>
       
    </header>

    <main>
        @yield('contenido')

        <script>
        document.addEventListener('DOMContentLoaded', function () {
    const eliminarBotones = document.querySelectorAll('.logout-button');

    eliminarBotones.forEach(boton => {
        boton.addEventListener('click', function (e) {
            e.preventDefault(); // Evita que el formulario se envíe inmediatamente

            const form = this.closest('form');

            Swal.fire({
                title: '<span style="color:#398F9D;">¿Estás segur@ de que quieres cerrar sesión?</span>',
                imageUrl: '{{ asset('img/logo.png') }}',
                imageWidth: 150,
                imageHeight: 150,
                imageAlt: 'Imagen de error',
                showCancelButton: true,
                background: '#eaf7f8',
                color: '#d32f2f',
                confirmButtonColor: '#398F9D',
                cancelButtonColor: '#233abd',
                confirmButtonText: 'Sí, cerrar sesión',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        imageUrl: '{{ asset('img/logo.png') }}',
                        imageWidth: 150,
                        imageHeight: 150,
                        imageAlt: 'Imagen de éxito',
                        title: '<h3 style="color:#398F9D;">Sesión cerrada correctamente</h3>',
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