<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recordatorio extends Model
{
    use HasFactory;

    protected $table = 'recordatorios'; // Nombre de la tabla

    protected $fillable = [
        'usuario_id',
        'libro_id',
        'mensaje',
        'fecha_recordatorio',
    ];

    // Relaciones
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }
}
