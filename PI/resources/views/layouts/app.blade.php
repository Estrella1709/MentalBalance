<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mental Balance Health Clinic')</title>
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plantilla.css') }}" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Mental Balance</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('rutaDirectorio') }}">Directorio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tratamiento">Qué tratamos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/inicioSesion">Inicio de sesión</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="/registroP">Regístrate como paciente</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-action" href="#">PIDE CITA</a>
                </li>-->
            </ul>
        </div>
    </div>
</nav>
    <!-- Contenido principal -->
    <main class="container my-5">
        @yield('content')
    </main>
    <!-- Pie de página -->
    <footer class="footer-custom text-center text-md-left">
        <div class="container py-4">
            <div class="row">
                <!-- Logo y redes sociales -->
                <div class="col-md-4 mb-3">
                    <img src="{{ asset('img/logo.jpg') }}" alt="Mental Balance Logo" class="footer-logo mb-3">
                    <p>PSIQUIATRÍA y PSICOLOGÍA</p>
                    <div class="footer-social-icons">
                        <a href="#" class="social-icon"><i class="fa fa-envelope"></i></a>
                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <!-- Información de contacto -->
                <div class="col-md-3 mb-1">
                    <h6>Contacto</h6>
                    <p>Mental Balance 251 Los Mental</p>
                    <p>Queretaro, Mexico</p>
                    <p>Tel.: <a href="tel:+442783655" class="contact-link">+4427836555</a></p>
                    <p>WhatsApp: <a href="https://wa.me/4427836555" class="contact-link">+4427836555</a></p>
                </div>
                <!-- Horarios de atención -->
                <div class="col-md-4 mb-3">
                    <h6>Horarios de atención</h6>
                    <p><strong>Horario de consultas:</strong><br>L-V 8:00 - 21:00h (todo el día)</p>
                    <p><strong>Horario de atención telefónica:</strong><br>L-V 9:30 - 14:30h (mañana)<br>L-V 16:00 - 21:00h (tarde)</p>
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="#">Aviso legal</a> | <a href="#">Política de cookies</a> | <a href="#">Política de privacidad</a> | <a href="#">Tarifas</a> | <a href="#">Términos y condiciones</a>
                <p class="mt-2">&copy; 2024 Mental Balance - Todos los derechos reservados</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
