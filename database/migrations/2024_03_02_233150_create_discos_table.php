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
        Schema::create('discos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('precio');
            $table->string('discografica');
            $table->foreignId('id_genero')->references('id')->on('genero');
            $table->foreignId('id_artista')->references('id')->on('artistas');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discos');
    }
};
