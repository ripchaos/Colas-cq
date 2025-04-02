<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Llamado;

class LlamadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Llamado::create([
            'turno_id' => 1,
            'pantalla_id' => 1,
            'user_id' => 1, 
            'accion' => 'llamar',
            'realizado_en' => now(),
        ]);
    }
}
