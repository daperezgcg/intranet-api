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
        Schema::create('registro_archivos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('tipos_archivo_id')->constrained('tipos_archivos');
            $table->string('ubicacion');
            $table->morphs('archivable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_archivos');
    }
};
