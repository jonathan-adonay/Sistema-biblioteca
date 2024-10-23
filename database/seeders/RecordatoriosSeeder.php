<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecordatoriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('recordatorios')->insert([
            [
                'id' => 1,
                'usuario_id' => 1, // Asegúrate de que este usuario existe en la tabla 'usuarios'
                'libro_id' => 1, // Asegúrate de que este libro existe en la tabla 'libros'
                'mensaje' => 'Recuerda devolver el libro a tiempo.',
                'fecha_recordatorio' => '2024-09-30 10:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'usuario_id' => 2,
                'libro_id' => 2,
                'mensaje' => 'No olvides leer el siguiente capítulo.',
                'fecha_recordatorio' => '2024-10-05 14:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'usuario_id' => 1,
                'libro_id' => 3,
                'mensaje' => 'Tienes una reserva pendiente para este libro.',
                'fecha_recordatorio' => '2024-10-10 09:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'usuario_id' => 3,
                'libro_id' => null, // Sin libro específico
                'mensaje' => 'Revisar la lista de nuevos libros disponibles.',
                'fecha_recordatorio' => '2024-10-15 12:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'usuario_id' => 2,
                'libro_id' => 4,
                'mensaje' => 'Último día para devolver el libro.',
                'fecha_recordatorio' => '2024-10-20 16:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
