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
        Schema::create('gcradio_entities', function (Blueprint $table) {
            $table->bigInteger('nit')->unique();
            $table->string('name');
            $table->string('initials');
            $table->string('type');
            $table->string('department');
            $table->string('municipality');
            $table->string('address');
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');
            $table->string('supervision');
            $table->string('sector');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gcradio_entities');
    }
};
