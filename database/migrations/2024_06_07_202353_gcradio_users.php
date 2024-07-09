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
        Schema::create('gcradio_users', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('name');
            $table->string('email');
            $table->unsignedBigInteger('id_country');
            $table->unsignedBigInteger('id_entity')->nullable();

            $table->foreign('id_country')->references('id')->on('gcradio_countries')->onDelete('cascade');
            $table->foreign('id_entity')->references('id')->on('gcradio_entities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gcradio_users');
    }
};
