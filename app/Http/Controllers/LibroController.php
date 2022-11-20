<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLibroRequest;
use App\Http\Requests\UpdateLibroRequest;
use App\Models\Autor;
use App\Models\Edad;
use App\Models\Editorial;
use App\Models\Encuadernacion;
use App\Models\Idioma;
use App\Models\Ilustrador;
use App\Models\Libro;
use App\Models\Tema;
use App\Models\User;

class LibroController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrar()
    {
        $libros = Libro::all();

        return view('user.libros.index', compact('libros'));
        
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();
        $totalUsuarios = User::all()->count();
        $totalLibros = Libro::all()->count();

        return view('admin.libros.index', compact(['libros', 'totalUsuarios','totalLibros']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $libro = new Libro();
        $temas = Tema::all();
        $autores = Autor::all();
        $ilustradores = Ilustrador::all();
        $editoriales = Editorial::all();
        $edades = Edad::all();
        $idiomas = Idioma::all();
        $encuadernaciones = Encuadernacion::all();

        return view(
            'admin.libros.create',
            compact(
                'libro',
                'temas',
                'autores',
                'ilustradores',
                'editoriales',
                'edades',
                'idiomas',
                'encuadernaciones'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLibroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLibroRequest $request)
    {
        //return $request->validated();

        $libro = new Libro($request->validated());

        //return $libro;

        $libro->save();

        $libro->temas()->sync($request->validated()['temas']);

        return back()->with('success', "Ficha de $libro->titulo creada correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLibroRequest  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLibroRequest $request, Libro $libro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        //
    }
}
