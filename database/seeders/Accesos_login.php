<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccesoLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('accesologin')->insert([
            [
                'id' => 1,
                'fecha_login' => now(), // Usa la fecha y hora actual
                'ip_address' => '192.168.1.1',
                'usuario_id' => 1, // Asegúrate de que este usuario existe en la tabla 'usuarios'
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'fecha_login' => now(),
                'ip_address' => '192.168.1.2',
                'usuario_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'fecha_login' => now(),
                'ip_address' => '192.168.1.3',
                'usuario_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'fecha_login' => now(),
                'ip_address' => '192.168.1.4',
                'usuario_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'fecha_login' => now(),
                'ip_address' => '192.168.1.5',
                'usuario_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'fecha_login' => now(),
                'ip_address' => '192.168.1.6',
                'usuario_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
