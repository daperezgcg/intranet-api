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
        Schema::create('gcradio_musical_preferences', function (Blueprint $table) {
            $table->string('uuid_user');
            $table->unsignedBigInteger('id_musical_genre');

            $table->foreign('uuid_user')->references('uuid')->on('gcradio_users')->onDelete('cascade');
            $table->foreign('id_musical_genre')->references('id')->on('gcradio_musical_genres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gcradio_musical_preferences');
    }
};
