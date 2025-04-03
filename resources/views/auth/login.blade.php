@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('content')
    <div class="login-container">
        <h2>Iniciar Sesión</h2>

        {{-- Mensaje de error --}}
        @if ($errors->any())
            <div style="color: red; margin-bottom: 1em;">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.attempt') }}">
            @csrf

            <div>
                <label for="email">Correo:</label>
                <input type="email" id="email" name="email" required value="{{ old('email') }}">
            </div>

            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Ingresar</button>
        </form>
    </div>
@endsection
