<?php

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

require __DIR__.'/auth.php';







Route::middleware(['auth'])->group(function () {
    
    Route::get('index',[LibroController::class, 'index'] )->name('libro.index');
    Route::get('show',[LibroController::class, 'show'] )->name('libro.show');
    

    
});



Route::middleware(['auth', 'can:solo-admin'])->group(function () {
    
    Route::prefix('admin')->group(function () {
        
            Route::get('prueba',[RolController::class, 'index'] )->name('prueba');
        
            
            Route::get('libro-create',[LibroController::class, 'create'] )->name('libro.create');
            Route::post('libro-store',[LibroController::class, 'store'] )->name('libro.store');

            Route::get('prueba',[RolController::class, 'index'] )->name('prueba');


        });
    

    //Route::get('prueba',[LibroController::class, 'index'] )->name('prueba');
    

    
});

Route::middleware(['auth', 'can:solo-superadmin'])->group(function () {
    
    
    //Route::get('prueba',[RolController::class, 'index'] )->name('prueba');



});


/* Route::get('prueba', function () {

    return view('prueba');
}); */

