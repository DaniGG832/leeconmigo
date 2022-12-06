<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemaRequest;
use App\Http\Requests\UpdateTemaRequest;
use App\Models\Ilustrador;
use App\Models\Libro;
use App\Models\Tema;
use App\Models\User;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Iluminate\Support\Facades\storage;

class TemaController extends Controller
{
    


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userIndex()
    {
        $temas = Tema::paginate(15);


        //return $users;
        return view('user.temas.index', compact('temas'));
    }

/**
     * Display the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function userShow(Tema $tema)
    {
        $libros =$tema->libros()->paginate(15) ;

        //return $libros;

        return view('user/temas/show',compact  ('libros','tema'));
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temas = Tema::paginate(12);
        $totalLibros = Libro::all()->count();
        $totalUsuarios = User::all()->count();

        //return $users;
        return view('admin.temas.index', compact('temas', 'totalUsuarios','totalLibros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tema = new Tema();

       return view('admin.temas.create',compact('tema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTemaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTemaRequest $request)
    {
        $tema = new Tema($request->validated());

        //return($request);

        if (isset( $request->validated()['img'])) {
            
            //return($request->img);
            //$filename = time().'.'.$request->validated()['img']->extension();

            $imagen =$request->validated()['img']->store('public/imagenes/temas');
            
            //return $imagen;

            $url = FacadesStorage::url($imagen);

            //return $url;

            //return($request->validated()['img']);

            /* TODO: subir imagen en el formulario */
            //dd($request->img->hashName());

            //dd($request->validated()['img']->extension());
            $tema->img = $url;
        }
        

        $tema->save();

        return back()->with('success', "Tema $tema->name añadido correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function show(Tema $tema)
    {
        return view('admin.temas.show', compact('tema'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function edit(Tema $tema)
    {
        return view('admin.temas.edit', compact('tema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTemaRequest  $request
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTemaRequest $request, Tema $tema)
    {
        //dd( $request->validated()['img']);

        $tema->fill($request->validated());

        if (isset( $request->validated()['img'])) {
            
            $imagen =$request->validated()['img']->store('public/imagenes/temas');
            
            $url = FacadesStorage::url($imagen);

            $tema->img = $url;
        }

        $tema->save();

        return redirect()->route('admin.temas.index')->with('success', "Tema $tema->name editado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tema $tema)
    {

        if ($tema->libros->count()) {
            //dd($tema->libros);
            return redirect()->route('admin.temas.index')->with('error', 'No se puede borrar un tema con libros asociadas');
            
        }else{
            $tema->delete();
            return redirect()->route('admin.temas.index')->with('success', 'tema borrado correctamente');
        }

        

    }
}
