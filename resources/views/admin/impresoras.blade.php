@extends('layouts.app')

@section('title', 'Gestín de Impresoras')

@section('content')
<div class="admin-impresoras">
    <h2>Impresoras</h2>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Dirección</th>
                <th>Departamento</th>
                <th>Activa</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($impresoras as $impresora)
                <tr>
                    <td>{{ $impresora->nombre }}</td>
                    <td>{{ strtoupper($impresora->tipo) }}</td>
                    <td>{{ $impresora->direccion }}</td>
                    <td>{{ $impresora->departamento->nombre ?? 'N/A' }}</td>
                    <td>{{ $impresora->activa ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="#">Editar</a> |
                        <a href="#">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="#">Agregar nueva impresora</a>
</div>
@endsection