<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAutorRequest;
use App\Http\Requests\UpdateAutorRequest;
use App\Models\Autor;
use App\Models\Libro;
use App\Models\User;
use Illuminate\Support\Facades\Storage as FacadesStorage;


class AutorController extends Controller
{
   

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Autor::all();
        $totalLibros = Libro::all()->count();
        $totalUsuarios = User::all()->count();

        //return $users;
        return view('admin.autores.index', compact('autores', 'totalUsuarios','totalLibros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $autor = new Autor();

       return view('admin.autores.create',compact('autor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAutorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAutorRequest $request)
    {
        dd( $request->validated());

        $autor = new Autor($request->validated());

        $autor->save();

        return back()->with('success', "Autor $autor->name registrado correctamente");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(Autor $autor)
    {
        return view('admin.autores.show', compact('autor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(Autor $autor)
    {
        return view('admin.autores.edit', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAutorRequest  $request
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAutorRequest $request, Autor $autor)
    {
        //return $request->validated();

        $autor->fill($request->validated());

        $autor->save();

        return redirect()->route('admin.autores.index')->with('success', "autor $autor->name editado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autor)
    {
        //return $autor->libros->count();
        
        if ($autor->libros->count()) {

            
            //dd($autor->libros);
            return redirect()->route('admin.autores.index')->with('error', 'No se puede borrar un autor con libros asociadas');
            
        }else{
            

            $autor->delete();
            return redirect()->route('admin.autores.index')->with('success', 'autor borrado correctamente');
        }
    }
}
