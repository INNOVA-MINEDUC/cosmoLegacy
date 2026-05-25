<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NivelacionArchivo extends Model
{
    protected $table = 'nivelacion_archivos';

    protected $fillable = ['material_id', 'titulo', 'enlace', 'orden'];

    public function material()
    {
        return $this->belongsTo(NivelacionMaterial::class, 'material_id');
    }
}
