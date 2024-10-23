<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetallePrestamosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('detalleprestamos')->insert([
            [
                'id' => 1,
                'prestamo_id' => 1, // Asegúrate de que este préstamo existe en la tabla 'prestamos'
                'libro_id' => 1,    // Asegúrate de que este libro existe en la tabla 'libros'
                'cantidad' => 1,
                'estado_libro' => 'En buen estado',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'prestamo_id' => 1,
                'libro_id' => 2,
                'cantidad' => 1,
                'estado_libro' => 'Dañado',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'prestamo_id' => 2,
                'libro_id' => 3,
                'cantidad' => 2,
                'estado_libro' => 'Perdido',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'prestamo_id' => 2,
                'libro_id' => 4,
                'cantidad' => 1,
                'estado_libro' => 'En buen estado',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'prestamo_id' => 3,
                'libro_id' => 5,
                'cantidad' => 1,
                'estado_libro' => 'Dañado',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'prestamo_id' => 3,
                'libro_id' => 6,
                'cantidad' => 1,
                'estado_libro' => 'En buen estado',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
