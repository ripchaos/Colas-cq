@extends('layouts.app')

@section('title', 'Pantalla de Turnos')

@section('content')
<div class="pantalla-turnos">
    <div class="video-container">
        @if($videoUrl)
            <iframe width="560" height="315" src="{{ $videoUrl }}" frameborder="0" allowfullscreen></iframe>
        @else
            <p>No hay video configurado.</p>
        @endif
    </div>

    <div class="turno-actual">
        <h2>
            @if($ultimoTurno)
                Turno <span>{{ $ultimoTurno->codigo }}</span>
            @else
                Esperando llamado...
            @endif
        </h2>
    </div>
</div>
@endsection