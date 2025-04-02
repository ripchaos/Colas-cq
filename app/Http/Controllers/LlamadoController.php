<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Llamado;
use Illuminate\Support\Facades\Auth;

class LlamadoController extends Controller
{
    public function registrar(Request $request)
    {
        $request->validate([
            'turno_id' => 'required|exists:turnos,id',
            'accion' => 'required|in:llamar,atender,pausar,finalizar',
            'pantalla_id' => 'nullable|exists:pantallas,id',
        ]);

        $llamado = Llamado::create([
            'turno_id' => $request->turno_id,
            'user_id' => Auth::id(),
            'pantalla_id' => $request->pantalla_id,
            'accion' => $request->accion,
            'realizado_en' => now(),
        ]);

        return response()->json($llamado);
    }
}
