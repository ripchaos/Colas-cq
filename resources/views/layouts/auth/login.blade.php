@extends('layouts.auth')

@section('title', 'Iniciar sesión')

@section('content')
    <div class="login-container">
        <h2>Iniciar Sesión</h2>

        <form method="POST" action="#">
            @csrf

            <div>
                <label for="email">Correo:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Ingresar</button>
        </form>
    </div>
@endsection
