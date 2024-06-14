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
        Schema::create('gcradio_genre_songs', function (Blueprint $table) {
            $table->unsignedBigInteger('id_song');
            $table->unsignedBigInteger('id_musical_genre');

            $table->foreign('id_song')->references('id')->on('gcradio_songs')->onDelete('cascade');
            $table->foreign('id_musical_genre')->references('id')->on('gcradio_musical_genres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gcradio_genre_songs');
    }
};
