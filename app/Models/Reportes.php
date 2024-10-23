<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reportes extends Model
{
    use HasFactory;

    protected $table = 'reportes'; // Nombre de la tabla

    protected $fillable = [
        'nombre',
        'tipo',
        'fecha_reporte',
        'usuario_id',
    ];

    // Relaciones
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
