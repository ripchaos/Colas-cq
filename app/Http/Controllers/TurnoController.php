<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use App\Models\Departamento;
use Illuminate\Http\Request;

class TurnoController extends Controller
{
    public function crear(Request $request)
    {
        $departamento = Departamento::findOrFail($request->departamento_id);
        $ultimo = Turno::where('departamento_id', $departamento->id)->latest()->first();

        $codigoBase = strtoupper($departamento->codigo);
        $consecutivo = $ultimo ? intval(substr($ultimo->codigo, 1)) + 1 : 1;
        $codigo = $codigoBase . str_pad($consecutivo, 3, '0', STR_PAD_LEFT);

        $turno = Turno::create([
            'codigo' => $codigo,
            'departamento_id' => $departamento->id,
            'atendido' => false,
        ]);

        // Aquí podrías disparar un evento para imprimir la ficha
        return response()->json($turno);
    }
}
