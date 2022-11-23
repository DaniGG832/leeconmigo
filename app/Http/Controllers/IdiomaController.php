<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIdiomaRequest;
use App\Http\Requests\UpdateIdiomaRequest;
use App\Models\Idioma;
use App\Models\Libro;
use App\Models\User;
use Illuminate\Support\Facades\Storage as FacadesStorage;

use Iluminate\Support\Facades\storage;


class IdiomaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function i()
    {
        
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idiomas = Idioma::all();
        $totalLibros = Libro::all()->count();
        $totalUsuarios = User::all()->count();

        //return $users;
        return view('admin.idiomas.index', compact('idiomas', 'totalUsuarios','totalLibros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idioma = new idioma();

       return view('admin.idiomas.create',compact('idioma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIdiomaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIdiomaRequest $request)
    {
        //return $request->validated();

        $idioma = new idioma($request->validated());

        if (isset( $request->validated()['img'])) { 

            $imagen =$request->validated()['img']->store('public/imagenes/idiomas');
            
            //return $imagen;

            $url = FacadesStorage::url($imagen);

            
            $idioma->img = $url;
        }

        $idioma->save();

        return back()->with('success', "Idioma $idioma->name registrado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function show(Idioma $idioma)
    {
        return view('admin.idiomas.show', compact('idioma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function edit(Idioma $idioma)
    {
        return view('admin.idiomas.edit', compact('idioma'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIdiomaRequest  $request
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIdiomaRequest $request, Idioma $idioma)
    {
         //return $request->validated();

         $idioma->fill($request->validated());

         if (isset( $request->validated()['img'])) {
             
             $imagen =$request->validated()['img']->store('public/imagenes/idiomas');
             
             $url = FacadesStorage::url($imagen);
 
             $idioma->img = $url;
         }
 
         $idioma->save();
        
        
 
         return redirect()->route('admin.idiomas.index')->with('success', "idioma $idioma->name editado correctamente");
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idioma $idioma)
    {
        //return $idioma->libros->count();
        
        if ($idioma->libros->count()) {

            
            //dd($idioma->libros);
            return redirect()->route('admin.idiomas.index')->with('error', 'No se puede borrar un idioma con libros asociadas');
            
        }else{
            

            $idioma->delete();
            return redirect()->route('admin.idiomas.index')->with('success', 'idioma borrado correctamente');
        }
    }
}
