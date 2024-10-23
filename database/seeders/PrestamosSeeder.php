<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrestamosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('prestamos')->insert([
            [
                'id' => 1,
                'libro_id' => 1, // Asegúrate de que este ID exista en la tabla 'libros'
                'usuario_id' => 1, // Asegúrate de que este ID exista en la tabla 'usuarios'
                'fecha_prestamo' => '2024-09-01',
                'fecha_devolucion' => '2024-09-15',
                'fecha_devolucion_real' => null,
                'estado' => 'Pendiente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'libro_id' => 2,
                'usuario_id' => 2,
                'fecha_prestamo' => '2024-09-02',
                'fecha_devolucion' => '2024-09-16',
                'fecha_devolucion_real' => null,
                'estado' => 'Pendiente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'libro_id' => 3,
                'usuario_id' => 3,
                'fecha_prestamo' => '2024-09-03',
                'fecha_devolucion' => '2024-09-17',
                'fecha_devolucion_real' => null,
                'estado' => 'Pendiente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'libro_id' => 4,
                'usuario_id' => 4,
                'fecha_prestamo' => '2024-09-04',
                'fecha_devolucion' => '2024-09-18',
                'fecha_devolucion_real' => null,
                'estado' => 'Pendiente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'libro_id' => 5,
                'usuario_id' => 5,
                'fecha_prestamo' => '2024-09-05',
                'fecha_devolucion' => '2024-09-19',
                'fecha_devolucion_real' => null,
                'estado' => 'Pendiente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'libro_id' => 6,
                'usuario_id' => 6,
                'fecha_prestamo' => '2024-09-06',
                'fecha_devolucion' => '2024-09-20',
                'fecha_devolucion_real' => null,
                'estado' => 'Pendiente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

