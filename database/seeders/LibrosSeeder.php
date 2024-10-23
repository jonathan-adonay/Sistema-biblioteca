<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('libros')->insert([
            [
                'id' => 1,
                'titulo' => 'Cien años de soledad',
                'autor_id' => 1, // Asegúrate de que este ID exista en la tabla 'autores'
                'editorial_id' => 1, // Asegúrate de que este ID exista en la tabla 'editoriales'
                'genero' => 'Ficción',
                'anio_publicacion' => 1967,
                'isbn' => '978-3-16-148410-0',
                'descripcion' => 'Una novela del autor colombiano Gabriel García Márquez que narra la historia de la familia Buendía.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'titulo' => 'El amor en los tiempos del cólera',
                'autor_id' => 1,
                'editorial_id' => 1,
                'genero' => 'Romance',
                'anio_publicacion' => 1985,
                'isbn' => '978-3-16-148410-1',
                'descripcion' => 'Una novela que narra la historia de amor entre Florentino Ariza y Fermina Daza.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'titulo' => '1984',
                'autor_id' => 2, // Asegúrate de que este ID exista en la tabla 'autores'
                'editorial_id' => 2, // Asegúrate de que este ID exista en la tabla 'editoriales'
                'genero' => 'Distopía',
                'anio_publicacion' => 1949,
                'isbn' => '978-3-16-148410-2',
                'descripcion' => 'Una novela de George Orwell que presenta un futuro totalitario.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'titulo' => 'Crónica de una muerte anunciada',
                'autor_id' => 1,
                'editorial_id' => 1,
                'genero' => 'Novela',
                'anio_publicacion' => 1981,
                'isbn' => '978-3-16-148410-3',
                'descripcion' => 'Una novela que explora el destino y la fatalidad en una pequeña ciudad.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'titulo' => 'Fahrenheit 451',
                'autor_id' => 2,
                'editorial_id' => 2,
                'genero' => 'Ciencia ficción',
                'anio_publicacion' => 1953,
                'isbn' => '978-3-16-148410-4',
                'descripcion' => 'Una novela de Ray Bradbury sobre un futuro donde los libros son prohibidos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'titulo' => 'El túnel',
                'autor_id' => 3, // Asegúrate de que este ID exista en la tabla 'autores'
                'editorial_id' => 3, // Asegúrate de que este ID exista en la tabla 'editoriales'
                'genero' => 'Psicológica',
                'anio_publicacion' => 1948,
                'isbn' => '978-3-16-148410-5',
                'descripcion' => 'Una novela de Ernesto Sabato que narra la obsesión de un pintor.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
