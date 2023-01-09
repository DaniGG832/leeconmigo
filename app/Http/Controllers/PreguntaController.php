<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePreguntaRequest;
use App\Http\Requests\UpdatePreguntaRequest;
use App\Models\Pregunta;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //return $request->search;
        Paginator::defaultView('paginate');

        $search = $request->search;
        //return $search;

        $preguntas = Pregunta::where('titulo', 'ILIKE', '%' . $request->search . '%')
        ->orwhere('descripcion', 'ILIKE', '%' . $request->search . '%')
        ->orderByDesc('id')
        ->paginate(15);
        //return $preguntas[0]->user;


        return view('user.preguntas.index', compact('preguntas','search'));
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
     * @param  \App\Http\Requests\StorePreguntaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePreguntaRequest $request)
    {


        $pregunta = new Pregunta($request->validated());

        $pregunta->user_id = auth()->id();

        $pregunta->save();

        return redirect()->back()->with('success', "Pregunta creada correctamente.");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function show(Pregunta $pregunta)
    {
        return view('user.preguntas.show',compact('pregunta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit(Pregunta $pregunta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePreguntaRequest  $request
     * @param  \App\Models\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePreguntaRequest $request, Pregunta $pregunta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pregunta $pregunta)
    {

        //return $pregunta;
        $pregunta->respuestas->each->delete();

        $pregunta->delete();

        return redirect()->back()->with('success', "Pregunta borrada correctamente.");

    }
}
