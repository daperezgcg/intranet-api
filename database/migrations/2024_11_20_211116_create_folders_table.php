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
        Schema::create('folders', function (Blueprint $table) {
      $table->id('folder_id'); // ID del folder
            $table->unsignedBigInteger('parent_folder_id')->nullable(); // Relación con otro folder (nullable)
            $table->string('folder_name'); // Nombre del folder
            $table->text('folder_description')->nullable(); // Descripción del folder
            $table->timestamps(); // Fechas de creación y actualización

            // Clave foránea para la relación jerárquica
            $table->foreign('parent_folder_id')->references('folder_id')->on('folders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('folders');
    }
};
