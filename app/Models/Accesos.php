<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accesos extends Model
{
    use HasFactory;

    protected $table = 'accesologin'; // Nombre de la tabla

    protected $fillable = [
        'usuario_id',
        'fecha_acceso',
        'ip',
    ];

    // Relaciones
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
