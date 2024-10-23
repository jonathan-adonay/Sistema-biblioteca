<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DevolucionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('devoluciones')->insert([
            [
                'id' => 1,
                'prestamo_id' => 1, // Asegúrate de que este préstamo existe en la tabla 'prestamos'
                'fecha_devolucion' => '2024-09-01',
                'estado' => 'completa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'prestamo_id' => 2,
                'fecha_devolucion' => '2024-09-10',
                'estado' => 'completa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'prestamo_id' => 3,
                'fecha_devolucion' => '2024-09-15',
                'estado' => 'pendiente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'prestamo_id' => 4,
                'fecha_devolucion' => '2024-09-20',
                'estado' => 'completa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'prestamo_id' => 5,
                'fecha_devolucion' => '2024-09-25',
                'estado' => 'completa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
