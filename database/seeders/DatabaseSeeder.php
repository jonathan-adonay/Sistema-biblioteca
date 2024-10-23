<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
           
            AutoresSeeder::class,
            EditorialesSeeder::class,
            LibrosSeeder::class,
            UsuariosSeeder::class,
            AccesoLoginSeeder::class,
            PrestamosSeeder::class,
            DetalleprestamosSeeder::class,
            DevolucionesSeeder::class,
            RecordatoriosSeeder::class,
            ReportesSeeder::class
        ]);
    }
}
