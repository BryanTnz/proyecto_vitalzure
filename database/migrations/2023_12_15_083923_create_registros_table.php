<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Relación registro_paciente
            $table->unsignedBigInteger('user_id');
            // Un paciente puede realizar muchos registros y un reporte le pertenece a un usuario            $table->unsignedBigInteger('role_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            
            // Relación registro_publicacion
            $table->unsignedBigInteger('publicacion_id');
            // Un usuario puede realizar muchos reportes y un reporte le pertenece a un usuario            $table->unsignedBigInteger('role_id');
            $table->foreign('publicacion_id')
                    ->references('id')
                    ->on('publicacions')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
