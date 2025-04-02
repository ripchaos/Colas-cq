@extends('layouts.app')

@section('title', 'Gestín de Usuarios')

@section('content')
<div class="admin-usuarios">
    <h2>Usuarios del Sistema</h2>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Ventanilla</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nombre_completo }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->rol }}</td>
                    <td>{{ $usuario->ventanilla }}</td>
                    <td>
                        <a href="#">Editar</a> |
                        <a href="#">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="#">Crear nuevo usuario</a>
</div>
@endsection