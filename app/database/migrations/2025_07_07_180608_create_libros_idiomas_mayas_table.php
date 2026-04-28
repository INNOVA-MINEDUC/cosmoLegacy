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
        Schema::create('libros_idiomas_mayas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('libro_id')->constrained('libros');
            $table->string('idioma');
            $table->string('enlace')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros_idiomas_mayas');
    }
};
