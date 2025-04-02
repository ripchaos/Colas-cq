@extends('layouts.app')

@section('title', 'Gestín de Departamentos')

@section('content')
<div class="admin-departamentos">
    <h2>Departamentos</h2>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Código</th>
                <th>Activo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departamentos as $departamento)
                <tr>
                    <td>{{ $departamento->nombre }}</td>
                    <td>{{ $departamento->codigo }}</td>
                    <td>{{ $departamento->activo ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="#">Editar</a> |
                        <a href="#">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="#">Crear nuevo departamento</a>
</div>
@endsection