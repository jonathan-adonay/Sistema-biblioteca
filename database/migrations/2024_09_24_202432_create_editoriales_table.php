<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('editoriales', function (Blueprint $table) {
            $table->id(); // ID auto-incrementable
            $table->string('nombre'); // Nombre de la editorial
            $table->text('direccion')->nullable(); // Dirección de la editorial
            $table->string('telefono')->nullable(); // Número de teléfono
            $table->string('email')->unique()->nullable(); // Correo electrónico
            $table->string('pagina_web')->nullable(); // Página web
            $table->text('descripcion')->nullable(); // Descripción de la editorial
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    public function down(): void {
        Schema::dropIfExists('editoriales');
    }
};
