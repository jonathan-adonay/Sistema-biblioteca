<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('autores')->insert([
            [
                'id' => 1, // ID manual
                'nombre' => 'Gabriel',
                'apellido' => 'García Márquez',
                'biografia' => 'Escritor colombiano, ganador del Premio Nobel de Literatura.',
                'fecha_nacimiento' => '1927-03-06',
                'nacionalidad' => 'Colombiana',
                'email' => 'gabriel@example.com',
                'telefono' => '123456789',
                'website' => 'http://gabrielgarciamarquez.com',
                'foto' => 'http://example.com/foto1.jpg',
                'genero' => 'masculino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nombre' => 'Isabel',
                'apellido' => 'Allende',
                'biografia' => 'Escritora chilena, conocida por sus novelas históricas.',
                'fecha_nacimiento' => '1942-08-02',
                'nacionalidad' => 'Chilena',
                'email' => 'isabel@example.com',
                'telefono' => '987654321',
                'website' => 'http://isabelallende.com',
                'foto' => 'http://example.com/foto2.jpg',
                'genero' => 'femenino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'nombre' => 'Mario',
                'apellido' => 'Vargas Llosa',
                'biografia' => 'Escritor peruano, ganador del Premio Nobel de Literatura.',
                'fecha_nacimiento' => '1936-03-28',
                'nacionalidad' => 'Peruana',
                'email' => 'mario@example.com',
                'telefono' => '1122334455',
                'website' => 'http://vargasllosa.com',
                'foto' => 'http://example.com/foto3.jpg',
                'genero' => 'masculino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'nombre' => 'Jorge Luis',
                'apellido' => 'Borges',
                'biografia' => 'Escritor y poeta argentino, famoso por sus cuentos cortos.',
                'fecha_nacimiento' => '1899-08-24',
                'nacionalidad' => 'Argentina',
                'email' => 'borges@example.com',
                'telefono' => '6677889900',
                'website' => 'http://borges.com',
                'foto' => 'http://example.com/foto4.jpg',
                'genero' => 'masculino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'nombre' => 'Julio',
                'apellido' => 'Cortázar',
                'biografia' => 'Escritor argentino, conocido por su obra surrealista.',
                'fecha_nacimiento' => '1914-08-26',
                'nacionalidad' => 'Argentina',
                'email' => 'julio@example.com',
                'telefono' => '3344556677',
                'website' => 'http://cortazar.com',
                'foto' => 'http://example.com/foto5.jpg',
                'genero' => 'masculino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'nombre' => 'Laura',
                'apellido' => 'Esquivel',
                'biografia' => 'Escritora mexicana, famosa por su novela "Como agua para chocolate".',
                'fecha_nacimiento' => '1950-09-30',
                'nacionalidad' => 'Mexicana',
                'email' => 'laura@example.com',
                'telefono' => '9988776655',
                'website' => 'http://lauraesquivel.com',
                'foto' => 'http://example.com/foto6.jpg',
                'genero' => 'femenino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
