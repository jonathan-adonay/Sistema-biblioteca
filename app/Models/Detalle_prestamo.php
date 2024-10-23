<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_prestamo extends Model
{
    use HasFactory;

    // Nombre de la tabla (si no sigue la convención plural)
    protected $table = 'detalleprestamos';

    // Campos que son asignables
    protected $fillable = [
        'prestamo_id',
        'libro_id',
        'cantidad',
        'estado_libro',
    ];

    // Relación con el modelo Prestamo
    public function prestamo()
    {
        return $this->belongsTo(Prestamo::class);
    }

    // Relación con el modelo Libro
    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }
}
