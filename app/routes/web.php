<?php

use App\Http\Controllers\ProfileController;
use App\Models\Libro;
use App\Models\Libros_idiomas_mayas;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/preprimaria', function () {
    return Inertia::render('Tableros/Preprimaria',
        ['libros' => Libro::where('nivel', '1')
            ->orderBy('orden', 'asc')
            ->paginate(7)]);
});

Route::get('/primaria', function () {
    return Inertia::render('Tableros/Primaria',
        ['libros' => Libro::where('nivel', '2')
            ->orderBy('orden', 'asc')
            ->paginate(7)]);
});

Route::get('/educacion_especial', function () {
    return Inertia::render('Tableros/Primaria',
        ['libros' => Libro::where('nivel', '3')
            ->orderBy('orden', 'asc')
            ->paginate(7)]);
});

Route::get('/seminario', function () {
    return Inertia::render('Tableros/Seminario_docente',
        ['libros' => Libro::where('nivel', '4')
            ->orderBy('orden', 'asc')
            ->paginate(7)]);
});

Route::get('/telesecundaria', function () {
    return Inertia::render('Tableros/Telesecundaria',
        ['libros' => Libro::where('nivel', '5')
            ->orderBy('orden', 'asc')
            ->paginate(7)]);
});

Route::get('/practica_supervisada', function () {
    return Inertia::render('Tableros/PracticaSupervisada', [
        'cuadernillos' => Libro::where('nivel', '6')->where('materia', 'Cuadernillos para estudiantes')->orderBy('orden', 'asc')->get(),
        'guias' => Libro::where('nivel', '6')->where('materia', 'Guías para docentes')->orderBy('orden', 'asc')->get(),
    ]);
});

Route::get('/idiomas_mayas', function () {
    return Inertia::render('Tableros/TodosIdiomasMayas',
        ['libros' => Libros_idiomas_mayas::with(['libro' => function ($query) {
                return $query->select('id', 'materia', 'grado', 'nivel');
            }])
            ->orderBy('idioma', 'asc')
            ->paginate(10)]);
});

Route::get('{any}/{id}/idiomas_mayas', function ($any, $id) {
    return Inertia::render('Tableros/Idiomas_mayas',
        ['libros' => Libros_idiomas_mayas::where('libro_id', $id)
            ->with(['Libro' =>function($query){
                return $query->select('id', 'materia', 'grado');
            }])
            ->orderBy('idioma', 'asc')
            ->paginate(7),
            'url_return' => $any]);
})->where(['any', '.*', 'id' => '[0-9]+']);

/*Route::get('/preprimaria', function () {
    return Inertia::render('Tableros/Preprimaria', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/




Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
