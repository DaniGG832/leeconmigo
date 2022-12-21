<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRespuestaRequest;
use App\Http\Requests\UpdateRespuestaRequest;
use App\Models\Pregunta;
use App\Models\Respuesta;
use Illuminate\Support\Facades\Redirect;

class RespuestaController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRespuestaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRespuestaRequest $request, Pregunta $pregunta)
    {
        //return $request->validated();

        $respuesta = new Respuesta($request->validated());
        $respuesta->user_id = auth()->id();
        $respuesta->pregunta_id = $pregunta->id;

        //return $respuesta;

        $respuesta->save();

        return Redirect()->back()->with('success','Respuesta añadida correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function show(Respuesta $respuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(Respuesta $respuesta,Pregunta $pregunta)
    {
        
        return view('user.preguntas.respuestas.edit',compact('respuesta','pregunta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRespuestaRequest  $request
     * @param  \App\Models\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRespuestaRequest $request, Respuesta $respuesta ,Pregunta $pregunta)
    {
        //return $request->validated('descripcion');

        $respuesta->descripcion = $request->validated('descripcion');

        $respuesta->save();

        /* TODO: redirigir a foro show  */
        return redirect()->route('preguntas.show',$pregunta)->with('success', 'Respuesta editada correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Respuesta $respuesta)
    {
        //
    }
}
