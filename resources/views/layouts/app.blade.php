<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Turnos')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <!-- Opcional: Navbar con enlaces o título -->
            <h1>Sistema de Turnos</h1>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Pie de página si lo querés usar -->
        <p>&copy; {{ date('Y') }} - Todos los derechos reservados</p>
    </footer>

    @stack('scripts')
</body>
</html>
