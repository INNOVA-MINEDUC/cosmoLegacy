<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';

    public function idiomasMayas()
    {
        return $this->hasMany(Libros_idiomas_mayas::class, 'libro_id');
    }
}
