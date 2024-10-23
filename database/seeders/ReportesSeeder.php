<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReportesSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener los IDs de los usuarios existentes
        $usuarioIds = DB::table('usuarios')->pluck('id');

        if ($usuarioIds->isEmpty()) {
            $this->command->info('No hay usuarios disponibles para asociar reportes.');
            return;
        }

        // Insertar reportes de ejemplo
        DB::table('reportes')->insert([
            [
                'nombre' => 'Reporte de Biblioteca',
                'tipo' => 'Resumen detallado de las actividades realizadas durante el mes.',
                'fecha_reporte' => '2024-12-04 02:18:48',
                'usuario_id' => $usuarioIds->random(), // Asociar con un usuario aleatorio
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Reporte de Evaluación de Biblioteca',
                'tipo' => 'Evaluación y análisis de la biblioteca.',
                'fecha_reporte' => '2024-09-04 02:18:48',
                'usuario_id' => $usuarioIds->random(), // Asociar con un usuario aleatorio
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Reporte de Libros Más Prestados',
                'tipo' => 'Listado de los libros más solicitados en el último mes.',
                'fecha_reporte' => '2024-10-10 02:18:48',
                'usuario_id' => $usuarioIds->random(), // Asociar con un usuario aleatorio
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Reporte de Usuarios Activos',
                'tipo' => 'Análisis de la actividad de los usuarios en el sistema.',
                'fecha_reporte' => '2024-11-01 02:18:48',
                'usuario_id' => $usuarioIds->random(), // Asociar con un usuario aleatorio
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Reporte de Devoluciones Pendientes',
                'tipo' => 'Resumen de las devoluciones que no se han realizado a tiempo.',
                'fecha_reporte' => '2024-10-20 02:18:48',
                'usuario_id' => $usuarioIds->random(), // Asociar con un usuario aleatorio
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
