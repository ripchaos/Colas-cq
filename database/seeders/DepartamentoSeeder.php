<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentoSeeder extends Seeder
{
    public function run(): void
    {
        $departamentos = [
            ['nombre' => 'Servicio al cliente', 'codigo' => 'A', 'activo' => true],
            ['nombre' => 'Cajas', 'codigo' => 'B', 'activo' => true],
            ['nombre' => 'Visita a sucursal', 'codigo' => 'C', 'activo' => true],
        ];

        foreach ($departamentos as $data) {
            Departamento::firstOrCreate(['nombre' => $data['nombre']], $data);
        }
        
    }
    
}
