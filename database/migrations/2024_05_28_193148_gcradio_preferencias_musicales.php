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
        Schema::create('gcradio_preferencias_musicales', function (Blueprint $table) {
            $table->string('uuid_usuario');
            $table->unsignedBigInteger('id_genero_musical');

            $table->foreign('uuid_usuario')->references('uuid')->on('gcradio_usuarios')->onDelete('cascade');
            $table->foreign('id_genero_musical')->references('id')->on('gcradio_generos_musicales')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gcradio_preferencias_musicales');
    }
};
