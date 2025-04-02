<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turno;
use Illuminate\Support\Facades\Auth;

class OperadorController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $turnos = Turno::where('departamento_id', $user->asignacion->departamento_id)
                       ->where('estado', 'pendiente')
                       ->orderBy('created_at')
                       ->get();

        return view('operador.index', compact('turnos'));
    }

    public function llamar($id)
    {
        $turno = Turno::findOrFail($id);
        $turno->estado = 'llamado';
        $turno->llamado_en = now();
        $turno->save();

        // Aquí se podría registrar en "llamados"

        return redirect()->back();
    }

    public function atender($id)
    {
        $turno = Turno::findOrFail($id);
        $turno->estado = 'atendiendo';
        $turno->atendido_en = now();
        $turno->save();

        return redirect()->back();
    }

    public function finalizar($id)
    {
        $turno = Turno::findOrFail($id);
        $turno->estado = 'finalizado';
        $turno->save();

        return redirect()->back();
    }
}
