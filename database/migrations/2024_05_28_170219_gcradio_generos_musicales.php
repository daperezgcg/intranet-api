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
        Schema::create('gcradio_generos_musicales', function (Blueprint $table) {
            $table->id('id');
            $table->string('titulo');
            $table->string('url_imagen');
            $table->string('url_playlist');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gcradio_generos_musicales');
    }
};
