<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccesoLoginTable extends Migration
{
    public function up()
    {
        Schema::create('acceso_login', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade'); // Asegúrate de que la tabla 'usuarios' existe
            $table->timestamp('fecha_login');
            $table->string('ip_address');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acceso_login');
    }
}
