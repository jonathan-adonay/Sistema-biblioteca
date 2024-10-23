<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $table = 'prestamos'; // Nombre de la tabla

    protected $fillable = [
        'libro_id',
        'usuario_id',
        'fecha_prestamo',
        'fecha_devolucion',
        'fecha_devolucion_real',
        'estado',
    ];

    // Relaciones
    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function detalles()
    {
        return $this->hasMany(DetallePrestamo::class);
    }

    public function devolucion()
    {
        return $this->hasOne(Devolucion::class);
    }
}
