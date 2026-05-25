<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // ── KIT DE EVALUACIÓN ── enlaces simples (items 1–6) ─────────────────
        DB::table('nivelacion_materiales')->where('kit', 'evaluacion')->where('orden', 1)
            ->update(['enlace' => '/tmp-libros/nivelacion/eval/a_instructivo.pdf']);

        DB::table('nivelacion_materiales')->where('kit', 'evaluacion')->where('orden', 2)
            ->update(['enlace' => '/tmp-libros/nivelacion/eval/b_instrumento_1.pdf']);

        DB::table('nivelacion_materiales')->where('kit', 'evaluacion')->where('orden', 3)
            ->update(['enlace' => '/tmp-libros/nivelacion/eval/c_instrumento_2.pdf']);

        DB::table('nivelacion_materiales')->where('kit', 'evaluacion')->where('orden', 4)
            ->update(['enlace' => '/tmp-libros/nivelacion/eval/d_tarjeta_a_decodificacion.pdf']);

        DB::table('nivelacion_materiales')->where('kit', 'evaluacion')->where('orden', 5)
            ->update(['enlace' => '/tmp-libros/nivelacion/eval/e_tarjeta_b_sonidos.pdf']);

        DB::table('nivelacion_materiales')->where('kit', 'evaluacion')->where('orden', 6)
            ->update(['enlace' => '/tmp-libros/nivelacion/eval/f_registro_evaluaciones.pdf']);

        // ── KIT DE EVALUACIÓN ── item 7: Láminas (carpeta con 5 archivos) ────
        $laminasId = DB::table('nivelacion_materiales')
            ->where('kit', 'evaluacion')->where('orden', 7)->value('id');

        DB::table('nivelacion_archivos')->insert([
            ['material_id' => $laminasId, 'titulo' => 'Segundo grado',  'enlace' => '/tmp-libros/nivelacion/eval/laminas/lamina_segundo_grado.pdf', 'orden' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['material_id' => $laminasId, 'titulo' => 'Tercer grado',   'enlace' => '/tmp-libros/nivelacion/eval/laminas/lamina_tercer_grado.pdf',  'orden' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['material_id' => $laminasId, 'titulo' => 'Cuarto grado',   'enlace' => '/tmp-libros/nivelacion/eval/laminas/lamina_cuarto_grado.pdf',  'orden' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['material_id' => $laminasId, 'titulo' => 'Quinto grado',   'enlace' => '/tmp-libros/nivelacion/eval/laminas/lamina_quinto_grado.pdf',  'orden' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['material_id' => $laminasId, 'titulo' => 'Sexto grado',    'enlace' => '/tmp-libros/nivelacion/eval/laminas/lamina_sexto_grado.pdf',   'orden' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // ── KIT DE EVALUACIÓN ── item 8: Capacitación (nuevo, 1 archivo) ─────
        DB::table('nivelacion_materiales')->insert([
            'kit'        => 'evaluacion',
            'titulo'     => 'Capacitación – Evaluación diagnóstica',
            'enlace'     => '/tmp-libros/nivelacion/eval/capacitacion/presentacion_webinar.pdf',
            'orden'      => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ── KIT DE INTERVENCIÓN ── enlaces simples (items 1–6) ───────────────
        DB::table('nivelacion_materiales')->where('kit', 'intervencion')->where('orden', 1)
            ->update(['enlace' => '/tmp-libros/nivelacion/interv/a_guia_docente.pdf']);

        DB::table('nivelacion_materiales')->where('kit', 'intervencion')->where('orden', 2)
            ->update(['enlace' => '/tmp-libros/nivelacion/interv/b_folleto_planificaciones.pdf']);

        DB::table('nivelacion_materiales')->where('kit', 'intervencion')->where('orden', 3)
            ->update(['enlace' => '/tmp-libros/nivelacion/interv/c_tarjetas_recortables_alfabeto.pdf']);

        DB::table('nivelacion_materiales')->where('kit', 'intervencion')->where('orden', 4)
            ->update(['enlace' => '/tmp-libros/nivelacion/interv/d_tarjeta_cajas_sonidos.pdf']);

        DB::table('nivelacion_materiales')->where('kit', 'intervencion')->where('orden', 5)
            ->update(['enlace' => '/tmp-libros/nivelacion/interv/e_folleto_lecturas_formativa.pdf']);

        DB::table('nivelacion_materiales')->where('kit', 'intervencion')->where('orden', 6)
            ->update(['enlace' => '/tmp-libros/nivelacion/interv/f_hojas_lectura_estudiantes.pdf']);

        // ── KIT DE INTERVENCIÓN ── item 7: Tarjetas por etapa (4 archivos) ───
        $tarjetasId = DB::table('nivelacion_materiales')
            ->where('kit', 'intervencion')->where('orden', 7)->value('id');

        DB::table('nivelacion_archivos')->insert([
            ['material_id' => $tarjetasId, 'titulo' => 'Etapa 1 – Emergente',      'enlace' => '/tmp-libros/nivelacion/interv/tarjetas_etapa/etapa_1_emergente.pdf',      'orden' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['material_id' => $tarjetasId, 'titulo' => 'Etapa 2 – Inicial',         'enlace' => '/tmp-libros/nivelacion/interv/tarjetas_etapa/etapa_2_inicial.pdf',         'orden' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['material_id' => $tarjetasId, 'titulo' => 'Etapa 3 – Decodificables',  'enlace' => '/tmp-libros/nivelacion/interv/tarjetas_etapa/etapa_3_decodificables.pdf',  'orden' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['material_id' => $tarjetasId, 'titulo' => 'Etapa 4 – Automatizadora',  'enlace' => '/tmp-libros/nivelacion/interv/tarjetas_etapa/etapa_4_automatizadora.pdf',  'orden' => 4, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // ── KIT DE INTERVENCIÓN ── item 8: Historias jamás contadas (3 archivos)
        $historiasId = DB::table('nivelacion_materiales')
            ->where('kit', 'intervencion')->where('orden', 8)->value('id');

        DB::table('nivelacion_archivos')->insert([
            ['material_id' => $historiasId, 'titulo' => 'Historias 1–10',  'enlace' => '/tmp-libros/nivelacion/interv/historias/historias_1_10.pdf',  'orden' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['material_id' => $historiasId, 'titulo' => 'Historias 11–20', 'enlace' => '/tmp-libros/nivelacion/interv/historias/historias_11_20.pdf', 'orden' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['material_id' => $historiasId, 'titulo' => 'Historias 21–32', 'enlace' => '/tmp-libros/nivelacion/interv/historias/historias_21_32.pdf', 'orden' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    public function down(): void
    {
        // Revertir archivos hijos
        DB::table('nivelacion_archivos')
            ->whereIn('material_id', function ($q) {
                $q->select('id')->from('nivelacion_materiales')
                  ->whereIn('kit', ['evaluacion', 'intervencion'])
                  ->whereIn('orden', [7, 8]);
            })->delete();

        // Eliminar item 8 de evaluación (Capacitación, fue insertado aquí)
        DB::table('nivelacion_materiales')
            ->where('kit', 'evaluacion')->where('orden', 8)->delete();

        // Limpiar enlaces
        DB::table('nivelacion_materiales')
            ->whereIn('kit', ['evaluacion', 'intervencion'])
            ->update(['enlace' => null]);
    }
};
