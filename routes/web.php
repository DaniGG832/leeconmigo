<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\IlustradorController;
use App\Http\Controllers\LibroController;
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







Route::middleware(['auth'])->group(function () {



    Route::get('libros', [LibroController::class, 'index'])->name('libros');

    Route::get('libros/{libro}', [LibroController::class, 'show'])->name('libro.show');

    Route::get('autores', [AutorController::class, 'index'])->name('Autores.index');
    Route::get('Autor/{autor}', [LibroController::class, 'show'])->name('libro.show');

    Route::get('ilustradores', [LibroController::class, 'index'])->name('libros.index');
    Route::get('ilustradores/{ilustrador}', [LibroController::class, 'show'])->name('libro.show');

    Route::get('editoriales', [LibroController::class, 'index'])->name('libros.index');
    Route::get('editoriales/{editorial}', [LibroController::class, 'show'])->name('libro.show');
});



Route::middleware(['auth', 'can:solo-admin'])->group(function () {

    Route::prefix('admin')->group(function () {


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

        Route::resource('temas', IdiomaController::class);

        Route::resource('edades', EditorialController::class)->parameters([
            'edades' => 'edad'
        ]);
        

        //Route::get('libro/create', [LibroController::class, 'create'])->name('libro.create');
        //Route::post('libro/store', [LibroController::class, 'store'])->name('libro.store');
    });


    //Route::get('prueba',[LibroController::class, 'index'] )->name('prueba');



});


Route::middleware(['auth', 'can:solo-superadmin'])->group(function () {
    
    
    //Route::get('prueba',[RolController::class, 'index'] )->name('prueba');



    

});


/* Route::get('prueba', function () {

    return view('prueba');
}); */