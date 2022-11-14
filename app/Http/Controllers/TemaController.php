<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemaRequest;
use App\Http\Requests\UpdateTemaRequest;
use App\Models\Ilustrador;
use App\Models\Libro;
use App\Models\Tema;
use App\Models\User;

class TemaController extends Controller
{
    
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function temasAdmin()
    {
        $temas = Tema::paginate(12);
        $totalLibros = Libro::all()->count();
        $totalUsuarios = User::all()->count();

        //return $users;
        return view('admin.temas.index', compact('temas', 'totalUsuarios','totalLibros'));
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        //dd($request->validated()['img']);

        //return $request->validated()['img'];

        $tema = new Tema($request->validated());

        $tema->save();

        return back()->with('success', "Temas $tema->name añadido correctamente");
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
        //return $request->validated();

        $tema->fill($request->validated());

        $tema->save();

        return redirect()->route('temas.admin')->with('success', "Temas $tema->name editado correctamente");
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
            return redirect()->route('temas.admin')->with('error', 'No se puede borrar un tema con libros asociadas');
            
        }else{
            $tema->delete();
            return redirect()->route('temas.admin')->with('success', 'tema borrado correctamente');
        }

        

    }
}
