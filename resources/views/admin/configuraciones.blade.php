@extends('layouts.app')

@section('title', 'Configuración del Sistema')

@section('content')
<div class="admin-configuracion">
    <h2>Configuración General</h2>

    <form action="{{ route('admin.configuracion.guardar') }}" method="POST">
        @csrf

        <div>
            <label for="url_video">URL del Video para Pantalla</label>
            <input type="text" name="url_video" id="url_video" value="{{ $configuraciones['url_video'] ?? '' }}">
        </div>

        <div>
            <label for="nombre_sistema">Nombre del Sistema</label>
            <input type="text" name="nombre_sistema" id="nombre_sistema" value="{{ $configuraciones['nombre_sistema'] ?? 'Sistema de Turnos' }}">
        </div>

        <button type="submit">Guardar Configuración</button>
    </form>
</div>
@endsection