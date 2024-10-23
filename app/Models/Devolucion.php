<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devolucion extends Model
{
    use HasFactory;

    protected $table = 'devoluciones'; // Nombre de la tabla

    protected $fillable = [
        'prestamo_id',
        'fecha_devolucion',
        'estado',
    ];

    // Definición de la relación con el modelo Prestamo
    public function prestamo()
    {
        return $this->belongsTo(Prestamo::class, 'prestamo_id');
    }
}
