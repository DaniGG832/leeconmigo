<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEditorialRequest;
use App\Http\Requests\UpdateEditorialRequest;
use App\Models\Editorial;
use App\Models\Libro;
use App\Models\User;
use Illuminate\Support\Facades\Storage as FacadesStorage;


class EditorialController extends Controller
{

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function e()
    {
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editoriales = Editorial::all();
        $totalLibros = Libro::all()->count();
        $totalUsuarios = User::all()->count();

        //return $users;
        return view('admin.editoriales.index', compact('editoriales', 'totalUsuarios','totalLibros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $editorial = new Editorial();

       return view('admin.editoriales.create',compact('editorial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEditorialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEditorialRequest $request)
    {
        //return $request->validated();

        $editorial = new Editorial($request->validated());

        if (isset( $request->validated()['img'])) {
            
            $imagen =$request->validated()['img']->store('public/imagenes/editoriales');
            
            $url = FacadesStorage::url($imagen);

            $editorial->img = $url;
        }

        $editorial->save();

        return back()->with('success', "Editorial $editorial->name registrado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function show(Editorial $editorial)
    {
        return view('admin.editoriales.show', compact('editorial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function edit(Editorial $editorial)
    {
        return view('admin.editoriales.edit', compact('editorial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEditorialRequest  $request
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEditorialRequest $request, Editorial $editorial)
    {
        //return $request->validated();

        $editorial->fill($request->validated());

        if (isset( $request->validated()['img'])) {
            
            $imagen =$request->validated()['img']->store('public/imagenes/editoriales');
            
            $url = FacadesStorage::url($imagen);

            $editorial->img = $url;
        }

        $editorial->save();

        return redirect()->route('admin.editoriales.index')->with('success', "Editorial $editorial->name editado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Editorial $editorial)
    {

        //return $editorial->libros->count();
        
        if ($editorial->libros->count()) {

            
            //dd($editorial->libros);
            return redirect()->route('admin.editoriales.index')->with('error', 'No se puede borrar un editorial con libros asociadas');
            
        }else{
            

            $editorial->delete();
            return redirect()->route('admin.editoriales.index')->with('success', 'editorial borrado correctamente');
        }
    }
}
