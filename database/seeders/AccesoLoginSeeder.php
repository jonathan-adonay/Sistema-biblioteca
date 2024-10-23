<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccesoLoginSeeder extends Seeder
{
    public function run()
    {
        DB::table('acceso_login')->insert([
            [
                'id' => 1,
                'fecha_login' => '2024-09-12',
                'ip_address' => '192.168.1.10',
                'usuario_id' => 1, // Asegúrate de que este ID existe en la tabla 'usuarios'
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'fecha_login' => '2024-09-16',
                'ip_address' => '192.168.1.20',
                'usuario_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agrega más registros según sea necesario
        ]);
    }
}
