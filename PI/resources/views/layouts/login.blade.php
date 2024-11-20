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
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom navbar-fixed-top">
    <div class="container">
        <div class="col-md-4 mb-3">
            <img src="{{ asset('img/logo.jpg') }}" alt="Mental Balance Logo" class="footer-logo mb-3">
        </div>                
        <a class="navbar-brand">Mental Balance</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/administrador/pacientes">Pacientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Medicos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Estadisticas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pagos</a>
                </li>
              
                @if(session('admin_authenticated'))
                    <li class="nav-item">
                        <form action="{{ route('administrador.logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link" style="display: inline; color: inherit;">Cerrar Sesión</button>
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<main class="container my-5">
    @yield('content')
</main>
<footer class="footer-custom text-center text-md-left">
    <div class="container py-4">
        <div class="text-center mt-3">
           
            <p class="mt-2">&copy; 2024 Mental Balance - Todos los derechos reservados</p>
        </div>
    </div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
