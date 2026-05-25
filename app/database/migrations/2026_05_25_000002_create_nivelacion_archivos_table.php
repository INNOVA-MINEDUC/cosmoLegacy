<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nivelacion_archivos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('material_id')->constrained('nivelacion_materiales')->cascadeOnDelete();
            $table->string('titulo');
            $table->string('enlace')->nullable();
            $table->integer('orden')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nivelacion_archivos');
    }
};
