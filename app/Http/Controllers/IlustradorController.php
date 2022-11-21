<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIlustradorRequest;
use App\Http\Requests\UpdateIlustradorRequest;
use App\Models\Ilustrador;
use App\Models\Libro;
use App\Models\User;
use Illuminate\Support\Facades\Storage as FacadesStorage;


class IlustradorController extends Controller
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
        $ilustradores = Ilustrador::all();
        $totalLibros = Libro::all()->count();
        $totalUsuarios = User::all()->count();

        //return $users;
        return view('admin.ilustradores.index', compact('ilustradores', 'totalUsuarios','totalLibros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ilustrador = new Ilustrador();

       return view('admin.ilustradores.create',compact('ilustrador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIlustradorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIlustradorRequest $request)
    {
        //return $request->validated();

        $ilustrador = new Ilustrador($request->validated());

        if (isset( $request->validated()['img'])) {
            
            

            $imagen =$request->validated()['img']->store('public/imagenes/ilustradores');
            
            //return $imagen;

            $url = FacadesStorage::url($imagen);

            
            $ilustrador->img = $url;
        }
        
        $ilustrador->save();

        return back()->with('success', "Autor $ilustrador->name registrado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ilustrador  $ilustrador
     * @return \Illuminate\Http\Response
     */
    public function show(Ilustrador $ilustrador)
    {
        return view('admin.ilustradores.show', compact('ilustrador'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ilustrador  $ilustrador
     * @return \Illuminate\Http\Response
     */
    public function edit(Ilustrador $ilustrador)
    {
        return view('admin.ilustradores.edit', compact('ilustrador'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIlustradorRequest  $request
     * @param  \App\Models\Ilustrador  $ilustrador
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIlustradorRequest $request, Ilustrador $ilustrador)
    {
        //return $request->validated();

        $ilustrador->fill($request->validated());

        if (isset( $request->validated()['img'])) {
            
            $imagen =$request->validated()['img']->store('public/imagenes/ilustradores');
            
            $url = FacadesStorage::url($imagen);

            $ilustrador->img = $url;
        }
        
        $ilustrador->save();

        return redirect()->route('admin.ilustradores.index')->with('success', "ilustrador $ilustrador->name editado correctamente");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ilustrador  $ilustrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ilustrador $ilustrador)
    {
        //return $ilustrador->libros->count();
        
        if ($ilustrador->libros->count()) {

            
            //dd($ilustrador->libros);
            return redirect()->route('admin.ilustradores.index')->with('error', 'No se puede borrar un ilustrador con libros asociadas');
            
        }else{
            

            $ilustrador->delete();
            return redirect()->route('admin.ilustradores.index')->with('success', 'ilustrador borrado correctamente');
        }
    }
}
