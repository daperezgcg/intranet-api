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
        Schema::create('gcradio_model_has_ads', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ad');
            $table->unsignedBigInteger('id_model');
            $table->string('model_type');

            $table->foreign('id_ad')->references('id')->on('gcradio_ads')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gcradio_model_has_ads');
    }
};
