<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('recordatorios', function (Blueprint $table) {
            $table->id(); // ID auto-incrementable
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade'); // Relación con la tabla usuarios
            $table->foreignId('libro_id')->nullable()->constrained('libros')->onDelete('cascade'); // Relación con la tabla libros
            $table->string('mensaje'); // Mensaje del recordatorio
            $table->dateTime('fecha_recordatorio'); // Fecha y hora del recordatorio
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    public function down(): void {
        Schema::dropIfExists('recordatorios');
    }
};
