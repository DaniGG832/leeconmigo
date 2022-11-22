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
use Illuminate\Support\Facades\Storage as FacadesStorage;


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
        $libros = libro::all();
        $autores = Autor::all();
        $ilustradores = Ilustrador::all();
        $libros = libro::all();
        $editoriales = Editorial::all();
        $edades = Edad::all();
        $idiomas = Idioma::all();
        $encuadernaciones = Encuadernacion::all();

        return view(
            'admin.libros.create',
            compact(
                'libro',
                'temas',
                'libros',
                'autores',
                'ilustradores',
                'libros',
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
        //return $request->validated()['temas'];

        $libro = new Libro($request->validated());

        if (isset( $request->validated()['img'])) {
            
            $imagen =$request->validated()['img']->store('public/imagenes/libros');
            
            $url = FacadesStorage::url($imagen);

            $libro->img = $url;
        }
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
         //return Tema::find(1);
        //return $libro->temas->contains(Tema::find(1));

        /* if ($libro->temas->contains(Tema::find(1))) {
           return 1;
        }else{
            return 0;
            
        } */

        return view('admin.libros.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        
        $temas = Tema::all();
        $libros = libro::all();
        $autores = Autor::all();
        $ilustradores = Ilustrador::all();
        $libros = libro::all();
        $editoriales = Editorial::all();
        $edades = Edad::all();
        $idiomas = Idioma::all();
        $encuadernaciones = Encuadernacion::all();

        return view(
            'admin.libros.edit',
            compact(
                'libro',
                'temas',
                'libros',
                'autores',
                'ilustradores',
                'libros',
                'editoriales',
                'edades',
                'idiomas',
                'encuadernaciones'
            )
        );
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
        $libro->fill($request->validated());


        if (isset( $request->validated()['img'])) {
            
            $imagen =$request->validated()['img']->store('public/imagenes/libros');
            
            $url = FacadesStorage::url($imagen);

            $libro->img = $url;
        }
        

        $libro->save();

        $libro->temas()->sync($request->validated()['temas']);



        return redirect()->route('admin.libros.index')->with('success', "libro $libro->name editado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->temas()->detach();

        $libro->delete();

        return redirect()->route('admin.libros.index')->with('success', 'Libro borrado correctamente');

    }
}
