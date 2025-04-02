<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Turno;

class TurnoSeeder extends Seeder
{
    public function run(): void
    {
        $turnos = [
            ['codigo' => 'A001', 'departamento_id' => 1, 'atendido' => false, 'preferencial' => false],
            ['codigo' => 'A002', 'departamento_id' => 1, 'atendido' => false, 'preferencial' => true],
            ['codigo' => 'B001', 'departamento_id' => 2, 'atendido' => false, 'preferencial' => false],
            ['codigo' => 'C001', 'departamento_id' => 3, 'atendido' => false, 'preferencial' => true],
        ];

        foreach ($turnos as $data) {
            Turno::create($data);
        }
    }
}
