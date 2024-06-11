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
        Schema::create('gcradio_ads_countries', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ad');
            $table->unsignedBigInteger('id_country');

            $table->foreign('id_ad')->references('id')->on('gcradio_ads')->onDelete('cascade');
            $table->foreign('id_country')->references('id')->on('gcradio_countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gcradio_ads_countries');
    }
};
