<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('autores', function (Blueprint $table) {
            $table->id(); // ID auto-incrementable
            $table->string('nombre'); // Nombre del autor
            $table->string('apellido'); // Apellido del autor
            $table->text('biografia')->nullable(); // Biografía del autor
            $table->date('fecha_nacimiento')->nullable(); // Fecha de nacimiento
            $table->string('nacionalidad')->nullable(); // Nacionalidad
            $table->string('email')->unique()->nullable(); // Correo electrónico
            $table->string('telefono')->nullable(); // Número de teléfono
            $table->string('website')->nullable(); // Sitio web
            $table->string('foto')->nullable(); // URL de la foto del autor
            $table->enum('genero', ['masculino', 'femenino', 'otro'])->nullable(); // Género
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    public function down(): void {
        Schema::dropIfExists('autores');
    }
};
