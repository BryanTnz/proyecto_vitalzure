<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Relación favorito_estudiante
            $table->unsignedBigInteger('user_id');
            // Un usuario puede tener muchos favoritos y un favorito le pertenece a un usuario
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            
            // Relación favorito_publicacion
            $table->unsignedBigInteger('publicacion_id');
            // Una publicacion puede tener muchos favoritos y un favorito le pertenece a una publicacion
            $table->foreign('publicacion_id')
                    ->references('id')
                    ->on('publications')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
       
    }

    
    public function down()
    {
        Schema::dropIfExists('favorites');
    }
};
