<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('calificacion');
            // Relación favoritos y publicacion
            $table->unsignedBigInteger('registro_id');
            // Un favorito puede tener muchas calificaciones y una calificacion le pertenece a un favorito
            $table->foreign('registro_id')
                    ->references('id')
                    ->on('favorites')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('qualifications');
    }
};
