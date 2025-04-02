@extends('layouts.app')

@section('title', 'Panel del Operador')

@section('content')
<div class="operador-panel">
    <h2>Bienvenido, {{ auth()->user()->nombre_completo ?? 'Operador' }}</h2>

    <h3>Turnos Pendientes</h3>
    <ul>
        @forelse($turnos as $turno)
            <li>
                <strong>{{ $turno->codigo }}</strong>
                <form action="{{ route('turnos.llamar', $turno->id) }}" method="POST" style="display:inline">
                    @csrf
                    <button type="submit">Llamar</button>
                </form>
            </li>
        @empty
            <li>No hay turnos pendientes.</li>
        @endforelse
    </ul>

    <h3>Turnos Atendidos</h3>
    <!-- Esta sección la podés implementar más adelante -->
</div>
@endsection
