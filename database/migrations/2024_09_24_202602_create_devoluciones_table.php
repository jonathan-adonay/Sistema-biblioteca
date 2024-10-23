<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('devoluciones', function (Blueprint $table) {
            $table->id(); // ID auto-incrementable
            $table->foreignId('prestamo_id')->constrained('prestamos')->onDelete('cascade'); // Relación con la tabla prestamos
            $table->date('fecha_devolucion'); // Fecha de devolución
            $table->string('estado')->default('completa'); // Estado de la devolución (completa, pendiente, etc.)
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    public function down(): void {
        Schema::dropIfExists('devoluciones');
    }
};
