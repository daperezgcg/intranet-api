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
        Schema::create('gcradio_usuarios', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('nombre');
            $table->string('correo');
            $table->string('pais');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gcradio_usuarios');
    }
};
