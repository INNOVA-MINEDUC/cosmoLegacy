<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NivelacionMaterial extends Model
{
    protected $table = 'nivelacion_materiales';

    protected $fillable = ['kit', 'titulo', 'enlace', 'orden'];

    public function archivos()
    {
        return $this->hasMany(NivelacionArchivo::class, 'material_id')->orderBy('orden');
    }
}
