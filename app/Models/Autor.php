<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $table = 'autores'; // Nombre de la tabla

    protected $fillable = [
        'nombre',
        'apellido',
        'biografia',
        'fecha_nacimiento',
        'nacionalidad',
        'email',
        'telefono',
        'website',
        'foto',
        'genero',
    ];

    // Relaciones
    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}
