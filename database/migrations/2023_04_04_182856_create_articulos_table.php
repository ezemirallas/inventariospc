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
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('sector');
            $table->string('iddeposito');
            $table->string('idcomputadora');
            $table->string('direccionip');
            $table->string('sistemaoperativo');
            $table->string('disco');
            $table->string('memoria');
            $table->string('microprocesador');
            $table->string('anotaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
