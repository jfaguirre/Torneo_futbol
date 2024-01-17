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
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();            
            $table->string('torneo')->nullable();
            $table->integer('numPartido')->nullable();
            $table->string('jornada')->nullable();
            $table->string('equipo_1')->nullable();
            $table->string('equipo_2')->nullable();     
            $table->integer('goles_equipo_1')->default(0);
            $table->integer('goles_equipo_2')->default(0);
            $table->string('ganador')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
