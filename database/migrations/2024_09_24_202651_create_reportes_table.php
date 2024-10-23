<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Esta columna debe estar presente
            $table->string('tipo');
            $table->timestamp('fecha_reporte');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();

            // Definir la clave foránea que relaciona 'reportes' con 'usuarios'
            $table->foreign('usuario_id')
                  ->references('id')
                  ->on('usuarios')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
}
