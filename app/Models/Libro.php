<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libros'; // Nombre de la tabla
    protected $primaryKey = 'id'; // Nombre de la tabla

    protected $fillable = [
        'titulo',
        'autor_id',
        'editorial_id',
        'genero',
        'anio_publicacion',
        'descripcion',
    ];

    // Relaciones
    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    public function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }

    public function detallesPrestamo()
    {
        return $this->hasMany(DetallePrestamo::class);
    }

    public function recordatorios()
    {
        return $this->hasMany(Recordatorio::class);
    }
}
