@extends('layouts.app')

@section('title', 'Panel de Administración')

@section('content')
<div class="admin-dashboard">
    <h2>Panel de Administración</h2>

    <ul>
        <li><a href="{{ route('admin.usuarios') }}">Usuarios</a></li>
        <li><a href="{{ route('admin.departamentos') }}">Departamentos</a></li>
        <li><a href="{{ route('admin.configuracion') }}">Configuración</a></li>
        <li><a href="{{ route('admin.impresoras') }}">Impresoras</a></li>
    </ul>
</div>
@endsection