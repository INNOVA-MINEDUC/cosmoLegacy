<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('nivelacion_materiales')->insert([
            // Kit de Evaluación
            ['kit' => 'evaluacion', 'titulo' => 'Instructivo para la evaluación de lectura',                               'enlace' => null, 'orden' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['kit' => 'evaluacion', 'titulo' => 'Hoja para respuesta instrumento 1',                                       'enlace' => null, 'orden' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kit' => 'evaluacion', 'titulo' => 'Hoja para respuestas instrumento 2',                                      'enlace' => null, 'orden' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['kit' => 'evaluacion', 'titulo' => 'Tarjeta para ejercicio A – decodificación',                               'enlace' => null, 'orden' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['kit' => 'evaluacion', 'titulo' => 'Tarjeta para ejercicio B – identificar sonidos y nombres de letras',      'enlace' => null, 'orden' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['kit' => 'evaluacion', 'titulo' => 'Registro de evaluaciones diagnóstica y formativas',                       'enlace' => null, 'orden' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['kit' => 'evaluacion', 'titulo' => 'Carpeta con láminas de lecturas para evaluación diagnóstica',             'enlace' => null, 'orden' => 7, 'created_at' => now(), 'updated_at' => now()],

            // Kit de Intervención
            ['kit' => 'intervencion', 'titulo' => 'Guía docente para implementación de la Estrategia de Nivelación de los Aprendizajes', 'enlace' => null, 'orden' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['kit' => 'intervencion', 'titulo' => 'Folleto planificaciones para la Estrategia de nivelación de los Aprendizajes',         'enlace' => null, 'orden' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kit' => 'intervencion', 'titulo' => 'Tarjetas recortables alfabeto',                                                        'enlace' => null, 'orden' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['kit' => 'intervencion', 'titulo' => 'Tarjeta caja de sonidos',                                                             'enlace' => null, 'orden' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['kit' => 'intervencion', 'titulo' => 'Folleto de lecturas evaluación formativa de fluidez',                                 'enlace' => null, 'orden' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['kit' => 'intervencion', 'titulo' => 'Hojas de lectura estudiantes evaluación formativa',                                   'enlace' => null, 'orden' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['kit' => 'intervencion', 'titulo' => 'Carpeta Tarjetas de lectura por etapa',                                               'enlace' => null, 'orden' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['kit' => 'intervencion', 'titulo' => 'Carpeta lecturas de la serie "Historias jamás contadas"',                             'enlace' => null, 'orden' => 8, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    public function down(): void
    {
        DB::table('nivelacion_materiales')->whereIn('kit', ['evaluacion', 'intervencion'])->delete();
    }
};
