<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turno;
use App\Models\Configuracion;

class PantallaController extends Controller
{
    public function index()
    {
        $ultimoTurno = Turno::where('estado', 'llamado')
                            ->latest('llamado_en')
                            ->first();

        $videoUrl = Configuracion::where('clave', 'url_video')->first()?->valor;

        return view('pantalla.index', compact('ultimoTurno', 'videoUrl'));
    }
}
