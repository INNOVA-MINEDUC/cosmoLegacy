<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nivelacion_materiales', function (Blueprint $table) {
            $table->id();
            $table->string('kit'); // 'evaluacion' | 'intervencion'
            $table->string('titulo');
            $table->string('enlace')->nullable();
            $table->integer('orden')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nivelacion_materiales');
    }
};
