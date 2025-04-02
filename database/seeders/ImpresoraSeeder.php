<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Impresora;

class ImpresoraSeeder extends Seeder
{
    public function run(): void
    {
        Impresora::create([
            'nombre' => 'Impresora Predeterminada',
            'path' => 'smb://localhost/impresora', // o solo el nombre de la impresora local
            'es_remota' => false,
            'activa' => true,
        ]);
    }
}
