<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;

    protected $table = 'editoriales'; // Nombre de la tabla

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
        'pagina_web',
        'descripcion',
    ];

    // Relaciones
    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}
