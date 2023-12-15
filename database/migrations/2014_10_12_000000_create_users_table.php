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
        Schema::create('users', function (Blueprint $table) {
            // ID para la tabla de la BDD
            $table->id();

            // columnas para la tabla BDD
            $table->string('name', 50);
            $table->string('lastname', 50);
            $table->string('dni', 50);
            $table->string('password');
            $table->string('age');
            $table->string('gender');
            $table->string('fat');
            $table->boolean('state')->default(true);

            // columnas que seran unicas para la tabla de la BDD
            $table->string('email')->unique();
            

            // columnas que seran podran aceptar regitros null para la tabla de la BDD
            $table->string('phone', 9)->nullable();
            $table->timestamp('email_verified_at')->nullable();

            // columnas especiales para la tabla de la BDD
            $table->rememberToken();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
