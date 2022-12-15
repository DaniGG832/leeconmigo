<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCriticaRequest;
use App\Http\Requests\UpdateCriticaRequest;
use App\Models\Critica;
use App\Models\Libro;

class CriticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Libro $libro)
    {
        
        /* $c = $libro->criticas[0]->user;
        return $c; */
        $criticas = Critica::where('libro_id',$libro->id)->paginate(8);
        
        return view('user.criticas.index', compact('criticas', 'libro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'create';

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCriticaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCriticaRequest $request)
    {
        return 'store';

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
    public function edit(Critica $critica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCriticaRequest  $request
     * @param  \App\Models\Critica  $critica
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCriticaRequest $request, Critica $critica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Critica  $critica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Critica $critica)
    {
        //
    }
}
