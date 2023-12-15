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
        Schema::create('calificacions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('calificacion');
            // Relación registro_paciente
            $table->unsignedBigInteger('registro_id');
            // Un paciente puede realizar muchos registros y un reporte le pertenece a un usuario            $table->unsignedBigInteger('role_id');
            $table->foreign('registro_id')
                    ->references('id')
                    ->on('registros')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificacions');
    }
};
