<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CriticaController;
use App\Http\Controllers\EdadController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\ForoController;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\IlustradorController;
use App\Http\Controllers\LibreriaController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\RespuestaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VotacionController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';



/* rutas publicas */

Route::get('libros', [LibroController::class, 'userIndex'])->name('libros');
Route::get('libros/{libro}', [LibroController::class, 'libroShow'])->name('libros.show');

Route::get('temas', [TemaController::class, 'userIndex'])->name('temas.index');
Route::get('temas/{tema}', [TemaController::class, 'userShow'])->name('temas.show');

Route::get('edades', [EdadController::class, 'userIndex'])->name('edades.index');
Route::get('edades/{edad}', [EdadController::class, 'userShow'])->name('edades.show');

Route::get('autores', [AutorController::class, 'userIndex'])->name('autores.index');
Route::get('autores/{autor}', [AutorController::class, 'userShow'])->name('autores.show');

Route::get('criticas/{libro}', [CriticaController::class, 'index'])->name('criticas');

/* foro */

Route::get('foro', [PreguntaController::class, 'index'])->name('preguntas.index');
Route::get('foro/{pregunta}/show', [PreguntaController::class, 'show'])->name('preguntas.show');

/* Email de contactanos */

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');


/* Librerias */

Route::get('librerias', [LibreriaController::class, 'index'])->name('librerias.index');




Route::middleware(['auth'])->group(function () {
    
    
    /* rutas foro para usuaro autentificado */
    //Route::get('foro/create', [PreguntaController::class, 'create'])->name('preguntas.create');
    Route::post('foro/preguntas/store', [PreguntaController::class, 'store'])->name('preguntas.store');
    Route::post('foro/respuestas/{pregunta}/store', [RespuestaController::class, 'store'])->name('respuestas.store');
    Route::get('foro/respuestas/{respuesta}/edit/{pregunta}', [RespuestaController::class, 'edit'])->name('respuestas.edit');
    Route::put('foro/respuestas/{respuesta}/update/{pregunta}', [RespuestaController::class, 'update'])->name('respuestas.update');
    Route::delete('foro/preguntas/{pregunta}', [PreguntaController::class, 'destroy'])->name('preguntas.destroy');

    /* borrar respuestas usuarios */
    Route::delete('foro/respuestas/{respuesta}/delete/{pregunta}', [RespuestaController::class, 'destroy'])->name('respuestas.destroy');


    /* lista de deseos */
    Route::get('lista-deseos', [LibroController::class, 'deseos'])->name('libros.deseos');
    Route::get('agregar-lista-deseos/{libro}', [LibroController::class, 'deseosAgregar'])->name('libros.deseos.agregar');
    Route::get('quitar-lista-deseos/{libro}', [LibroController::class, 'deseosQuitar'])->name('libros.deseos.quitar');


    /* Rutas para las criticas */
    Route::get('criticas/{libro}/create', [CriticaController::class, 'create'])->name('criticas.create');
    Route::post('criticas/{libro}/store', [CriticaController::class, 'store'])->name('criticas.store');
    Route::get('criticas/{libro}/edit/{critica}', [CriticaController::class, 'edit'])->name('criticas.edit');
    Route::put('criticas/{critica}/update/{libro}', [CriticaController::class, 'update'])->name('criticas.update');
    Route::delete('criticas/{critica}', [CriticaController::class, 'destroy'])->name('criticas.destroy');

    /* votos otros usuarios */
    Route::get('Votaciones/{user}/{libro}', [VotacionController::class, 'votosUsuario'])->name('votos.usuario');

    /* ruta para la votacion (ajax) */
    Route::post('votar', [VotacionController::class, 'votar'])->name('votar');
    
    /* votos usuario logeado */
    Route::get('votaciones', [VotacionController::class, 'index'])->name('votaciones');

    //Route::get('profile', [VotacionController::class, 'votar'])->name('profile');
    

    Route::get('profile', [UserController::class, 'show'])->name('profile');

    Route::put('profile/edit/{user}', [UserController::class, 'update'])->name('user.edit');




    //Route::get('libros/{libro}', [LibroController::class, 'show'])->name('libro.show');

    //Route::get('autores', [AutorController::class, 'mostrar'])->name('Autores.mostrar');
    //Route::get('Autor/{autor}', [LibroController::class, 'show'])->name('libro.show');

    // Route::get('ilustradores', [LibroController::class, 'index'])->name('libros.index');
    // Route::get('ilustradores/{ilustrador}', [LibroController::class, 'show'])->name('libro.show');

    //Route::get('editoriales', [LibroController::class, 'index'])->name('libros.index');
    //Route::get('editoriales/{editorial}', [LibroController::class, 'show'])->name('libro.show'); 


});



Route::middleware(['auth', 'can:solo-admin'])->group(function () {

    Route::get('/admin', [RolController::class, 'index'])->name('admin');


    Route::prefix('admin')->name('admin.')->group(function () {




        Route::resource('users', UserController::class);

        Route::resource('libros', LibroController::class);

        Route::resource('autores', AutorController::class)->parameters([
            'autores' => 'autor'
        ]);

        Route::resource('ilustradores', IlustradorController::class)->parameters([
            'ilustradores' => 'ilustrador'
        ]);

        Route::resource('editoriales', EditorialController::class)->parameters([
            'editoriales' => 'editorial'
        ]);

        Route::resource('idiomas', IdiomaController::class);

        Route::resource('temas', TemaController::class);

        Route::resource('edades', EditorialController::class)->parameters([
            'edades' => 'edad'
        ]);


        //Route::get('libro/create', [LibroController::class, 'create'])->name('libro.create');
        //Route::post('libro/store', [LibroController::class, 'store'])->name('libro.store');
    });


    //Route::get('prueba',[LibroController::class, 'index'] )->name('prueba');



});


Route::middleware(['auth', 'can:solo-superadmin'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('prueba', [RolController::class, 'index'])->name('prueba');
    });
});


/* Route::get('prueba', function () {

    return view('prueba');
}); */