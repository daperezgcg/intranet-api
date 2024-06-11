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
        Schema::create('gcradio_ads', function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
            $table->string('text');
            $table->string('url_image');
            $table->string('cta');
            $table->string('url_cta');
            $table->string('url_audio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gcradio_ads');
    }
};
