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
        Schema::create('publicacions', function (Blueprint $table) {
            // ID para la tabla de la BDD
            $table->id();

            // columnas para la tabla de la BDD
            $table->string('Titulo');
            $table->string('Descripcion');
            $table->string('Beneficios');
            $table->string('Procedimiento');
            //$table->boolean('state')->default(true);

            // Relación
            $table->unsignedBigInteger('user_id');
            // Un usuario puede realizar muchos reportes y un reporte le pertenece a un usuario            $table->unsignedBigInteger('role_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            // columnas especiales para la tabla de la BDD
            $table->timestamps();
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicaciones');
    }
};
