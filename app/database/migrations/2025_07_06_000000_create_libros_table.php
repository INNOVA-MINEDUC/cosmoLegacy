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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('nivel')->nullable();
            $table->string('grado')->nullable();
            $table->string('materia')->nullable();
            $table->string('titulo')->nullable();
            $table->string('autor')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('enlace')->nullable();
            $table->integer('orden')->nullable();
            $table->boolean('idioma_maya')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
