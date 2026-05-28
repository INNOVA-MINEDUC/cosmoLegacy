<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $cuadernillos = [
            ['titulo' => 'Cuadernillo 1: Habilidades Blandas Cuadernillo para estudiante 1', 'enlace' => '/docs/Cuadernillo 1 Habilidades Blandas Cuadernillo para estudiante 1.pdf', 'orden' => 1],
            ['titulo' => 'Cuadernillo 2: Salud mental y apoyo socio emocional cuadernillo estudiante 2', 'enlace' => '/docs/Cuadernillo 2 Salud mental y apoyo socio emocional cuadernillo estudiante 2.pdf', 'orden' => 2],
            ['titulo' => 'Cuadernillo 3: Empleo y autoempleo Cuadernillo Estudiante 3', 'enlace' => '/docs/Cuadernillo 3 Empleo y autoempleo Cuadernillo Estudiante 3.pdf', 'orden' => 3],
            ['titulo' => 'Cuadernillo 4: Derechos y deberes en el trabajo Cuadernillo Estudiante 4', 'enlace' => '/docs/Cuadernillo 4 Derechos y deberes en el trabajo Cuadernillo Estudiante 4.pdf', 'orden' => 4],
            ['titulo' => 'Cuadernillo 5: Salud y seguridad en el trabajo Cuadernillo Estudiante 5', 'enlace' => '/docs/Cuadernillo 5 Salud y seguridad en el trabajo Cuadernillo Estudiante 5.pdf', 'orden' => 5],
            ['titulo' => 'Cuadernillo 6: Redes Sociales Cuadernillo Estudiante 6', 'enlace' => '/docs/Cuadernillo 6 Redes Sociales Cuadernillo Estudiante 6.pdf', 'orden' => 6],
        ];

        $guias = [
            ['titulo' => 'Normativa: 2011 2940-2011 AM Evaluación de Áreas Específicas', 'enlace' => '/docs/Normativa 2011 2940-2011 AM Evaluacion de Areas Especificas.pdf', 'orden' => 1],
            ['titulo' => 'Guía 1: GUIA DOCENTE 1 habilidades blandas', 'enlace' => '/docs/Guia 1 GUIA DOCENTE 1 habilidades blandas.pdf', 'orden' => 2],
            ['titulo' => 'Guía 2: Salud mental y apoyo Socio Emocional Guía Docente 2', 'enlace' => '/docs/Guia 2 Salud mental y apoyo Socio Emocional Guia Docente 2.pdf', 'orden' => 3],
            ['titulo' => 'Guía 3: Empleo y autoempleo Guía Docente 3', 'enlace' => '/docs/Guia 3 Empleo y autoempleo Guia Docente 3.pdf', 'orden' => 4],
            ['titulo' => 'Guía 4: Derechos y deberes en el trabajo Guía docente 4', 'enlace' => '/docs/Guia 4 Derechos y deberes en el trabajo Guia docente 4.pdf', 'orden' => 5],
            ['titulo' => 'Guía 5: Salud y seguridad en el trabajo Guía docente 5', 'enlace' => '/docs/Guia 5 Salud y seguridad en el trabajo Guia docente 5.pdf', 'orden' => 6],
            ['titulo' => 'Guía 6: Redes Sociales Guía Docente 6', 'enlace' => '/docs/Guia 6 Redes Sociales Guia Docente 6.pdf', 'orden' => 7],
        ];

        foreach ($cuadernillos as $item) {
            DB::table('libros')->insert([
                'nivel' => '6',
                'materia' => 'Cuadernillos para estudiantes',
                'titulo' => $item['titulo'],
                'enlace' => $item['enlace'],
                'orden' => $item['orden'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        foreach ($guias as $item) {
            DB::table('libros')->insert([
                'nivel' => '6',
                'materia' => 'Guías para docentes',
                'titulo' => $item['titulo'],
                'enlace' => $item['enlace'],
                'orden' => $item['orden'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    public function down(): void
    {
        DB::table('libros')->where('nivel', '6')->delete();
    }
};
