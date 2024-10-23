<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EditorialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('editoriales')->insert([
            [
                'id' => 1,
                'nombre' => 'Penguin Random House',
                'direccion' => 'Calle Falsa 123, Ciudad de México',
                'telefono' => '5551234567',
                'email' => 'contacto@penguinrandomhouse.com',
                'pagina_web' => 'https://www.penguinrandomhouse.com',
                'descripcion' => 'Editorial global con una gran selección de autores.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nombre' => 'Editorial Planeta',
                'direccion' => 'Avenida Siempre Viva 742, Buenos Aires',
                'telefono' => '5411234567',
                'email' => 'info@editorialplaneta.com',
                'pagina_web' => 'https://www.editorialplaneta.com',
                'descripcion' => 'Una de las editoriales más grandes del mundo de habla hispana.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'nombre' => 'HarperCollins',
                'direccion' => 'Avenida Reforma 222, Ciudad de México',
                'telefono' => '5559876543',
                'email' => 'contacto@harpercollins.com',
                'pagina_web' => 'https://www.harpercollins.com',
                'descripcion' => 'Editorial estadounidense con una rica historia en el mundo literario.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'nombre' => 'Alfaguara',
                'direccion' => 'Calle del Libro 456, Madrid',
                'telefono' => '3498765432',
                'email' => 'contacto@alfaguara.com',
                'pagina_web' => 'https://www.alfaguara.com',
                'descripcion' => 'Especializada en literatura de calidad para todas las edades.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'nombre' => 'Anagrama',
                'direccion' => 'Calle Poesía 789, Barcelona',
                'telefono' => '3491234567',
                'email' => 'info@anagrama.com',
                'pagina_web' => 'https://www.anagrama.com',
                'descripcion' => 'Editorial independiente con énfasis en autores de vanguardia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'nombre' => 'Siglo XXI Editores',
                'direccion' => 'Calle Historia 321, Bogotá',
                'telefono' => '5712345678',
                'email' => 'contacto@sigloxxieditores.com',
                'pagina_web' => 'https://www.sigloxxieditores.com',
                'descripcion' => 'Editorial especializada en ciencias sociales y humanidades.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
