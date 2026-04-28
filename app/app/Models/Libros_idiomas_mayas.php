<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libros_idiomas_mayas extends Model
{
    protected $table = 'libros_idiomas_mayas';

    public function libro()
    {
        return $this->belongsTo(Libro::class, 'libro_id');
    }
}
