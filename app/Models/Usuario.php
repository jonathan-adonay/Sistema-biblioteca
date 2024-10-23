<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios'; // Nombre de la tabla

    protected $fillable = [
        'nombre',
        'email',
        'password',
    ];

    // Relaciones
    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }

    public function recordatorios()
    {
        return $this->hasMany(Recordatorio::class);
    }

    public function reportes()
    {
        return $this->hasMany(Reporte::class);
    }

    public function accesos()
    {
        return $this->hasMany(Acceso::class);
    }
}
