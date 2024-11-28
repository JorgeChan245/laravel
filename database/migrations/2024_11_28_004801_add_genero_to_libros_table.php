<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('libros', function (Blueprint $table) {
            $table->string('genero')->nullable(); // O usa otro tipo de dato si es necesario
        });
    }
    
    public function down()
    {
        Schema::table('libros', function (Blueprint $table) {
            $table->dropColumn('genero');
        });
    }
    
};
