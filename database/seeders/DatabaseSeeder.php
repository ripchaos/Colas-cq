<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\ImpresoraSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear el usuario admin
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'), 
            'nombre_completo' => 'Administrador General',
            'rol' => 'admin',
            'ventanilla' => null, // No aplica para admin
        ]);

        // Llamar a otros seeders
        $this->call([
            DepartamentoSeeder::class,
            // Podés ir agregando más seeders aquí luego (impresoras, etc)
            PantallaSeeder::class,
            ImpresoraSeeder::class,
            TurnoSeeder::class,
            LlamadoSeeder::class,
        ]);
    }
}

