<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('detalleprestamos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prestamo_id');
            $table->unsignedBigInteger('libro_id');
            $table->integer('cantidad');
            $table->enum('estado_libro', ['En buen estado', 'Dañado', 'Perdido']);
            $table->timestamps();

            // Foreign keys
            $table->foreign('prestamo_id')->references('id')->on('prestamos')->onDelete('cascade');
            $table->foreign('libro_id')->references('id')->on('libros')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('detalleprestamos');
    }
};
