<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pantalla;
use App\Models\Departamento;

class PantallaSeeder extends Seeder
{
    public function run(): void
    {
        $departamentos = Departamento::pluck('id')->toArray();

        Pantalla::create([
            'nombre' => 'Pantalla Principal',
            'departamento_id' => $departamentos[0] ?? null, // Asociada al primer departamento
            'activa' => true,
        ]);
    }
}
