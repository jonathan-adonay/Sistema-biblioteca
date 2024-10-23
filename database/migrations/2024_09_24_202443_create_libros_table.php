<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('genero'); // Crea la columna `genero`
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('editorial_id');
            $table->year('anio_publicacion')->nullable();
            $table->string('isbn')->unique();
            $table->text('descripcion')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('autor_id')->references('id')->on('autores')->onDelete('cascade');
            $table->foreign('editorial_id')->references('id')->on('editoriales')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('libros');
    }
};
