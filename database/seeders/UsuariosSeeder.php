<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'id' => 1,
                'nombre' => 'Juan Pérez',
                'email' => 'juan.perez@example.com',
                'password' => bcrypt('password123'), // Asegúrate de usar un hash para la contraseña
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nombre' => 'María García',
                'email' => 'maria.garcia@example.com',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'nombre' => 'Pedro Rodríguez',
                'email' => 'pedro.rodriguez@example.com',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'nombre' => 'Laura Sánchez',
                'email' => 'laura.sanchez@example.com',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'nombre' => 'Carlos Fernández',
                'email' => 'carlos.fernandez@example.com',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'nombre' => 'Ana López',
                'email' => 'ana.lopez@example.com',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
