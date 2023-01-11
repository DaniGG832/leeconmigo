<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCriticaRequest;
use App\Http\Requests\UpdateCriticaRequest;
use App\Models\Critica;
use App\Models\Libro;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

class CriticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Libro $libro)
    {
        Paginator::defaultView('paginate');

        /* $c = $libro->criticas[0]->user;
        return $c; */
        $criticas = Critica::orderBy('created_at', 'desc')->where('libro_id',$libro->id)->paginate(8);
        
        return view('user.criticas.index', compact('criticas', 'libro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Libro $libro)
    {
        //return Auth::user()->criticas->where('libro_id',$libro->id)->count();
        //return $libro->criticas;

        if (Auth::user()->criticas->where('libro_id',$libro->id)->count()) {
            
            return redirect()->back()->with('error', 'Solo se permite una crítica por libro, puede editar la que ya ha escrito.') ;

        }else{

            $critica = new Critica();
            //return $libro;
            return view('user.criticas.create', compact('libro','critica'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCriticaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCriticaRequest $request, Libro $libro)
    {
        //return $request->validated();

        $critica = new Critica();

        $critica->user_id = auth()->user()->id;
        $critica->libro_id = $libro->id;

        $critica->fill($request->validated());

        $critica->save();

        /* return $critica; */

        return redirect()->route('criticas',$libro)->with('success', 'Su crítica se a añadido correctamente.') ;



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Critica  $critica
     * @return \Illuminate\Http\Response
     */
    public function show(Critica $critica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Critica  $critica
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro, Critica $critica)
    {
        return view('user.criticas.edit', compact('libro','critica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCriticaRequest  $request
     * @param  \App\Models\Critica  $critica
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCriticaRequest $request, Critica $critica, Libro $libro)
    {
        //return $request->validated();
        //return $libro;

        $critica->fill($request->validated());

        $critica->save();

        return redirect()->route('criticas',$libro)->with('success', 'Su crítica se a modificado correctamente.');
        //return view('user.criticas.index',compact('libro','criticas'))->with('success', 'Su crítica se a modificado correctamente.') ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Critica  $critica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Critica $critica)
    {

        if($critica->user_id == auth()->user()->id  || Auth::user()->rol_id!= 1){
            $critica->delete();

            return redirect()->back()->with('success', 'Critica borrada correctamente.');
        }

        return redirect()->back()->with('error', 'No tienes permisos para borrar esa crítica');
    }
}
