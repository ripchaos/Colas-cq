@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')
<div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" id="email" required autofocus>
        </div>

        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <button type="submit">Entrar</button>
        </div>
    </form>
</div>
@endsection
