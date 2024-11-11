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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',100);
            $table->string('apellidos',100);
            $table->string('celular',100);
            $table->string('Nro_seguro',100)->unique();
            $table->string('genero',100);         
            $table->string('alergias',100);
            $table->string('contacto_emergencia');
            $table->string('observaciones',255)->nullable();
            $table->string('fecha_nacimiento',100);
            $table->string('direccion',255);
            $table->string('correo',255)->unique();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
