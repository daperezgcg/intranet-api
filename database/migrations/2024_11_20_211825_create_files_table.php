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
        Schema::create('files', function (Blueprint $table) {
            $table->id('file_id'); // ID del archivo
            $table->unsignedBigInteger('folder_id'); // Relación con el folder
            $table->string('file_name'); // Nombre del archivo
            $table->string('file_path'); // Ruta del archivo
            $table->string('file_type'); // Ruta del archivo
            $table->integer('file_size'); // Tamaño del archivo en bytes
            $table->timestamps(); // Fechas de creación y actualización

            // Clave foránea para relacionar el archivo con el folder
            $table->foreign('folder_id')->references('folder_id')->on('folders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
