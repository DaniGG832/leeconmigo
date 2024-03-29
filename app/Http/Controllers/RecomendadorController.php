<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Edad;
use App\Models\Editorial;
use App\Models\Encuadernacion;
use App\Models\Idioma;
use App\Models\Ilustrador;
use App\Models\Libro;
use App\Models\Tema;
use Illuminate\Http\Request;

class RecomendadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return $this->data('valor');
        $libros = Libro::all();
        $temas = Tema::all();
        $encuadernaciones = Encuadernacion::all();
        $autores = Autor::all();
        $ilustradores = Ilustrador::all();
        $idiomas = Idioma::all();
        $editoriales = Editorial::all();
        $edades = Edad::all();



        return view('user.recomendador.index', compact(
            'libros',
            'temas',
            'encuadernaciones',
            'autores',
            'ilustradores',
            'idiomas',
            'editoriales',
            'edades',
        ));
    }



    public function data(Request $request)
    {

        /* solo se muestran los libro que ya tienen algun voto has('votaciones','>',0)*/

        $temaId = $request->tema_id;

        if ($request['tema_id']) {
            $librosRecomendados = Libro::withAvg('votaciones', 'voto')
                ->withcount('votaciones')
                ->orderBy($request->ordenar, $request->ordenar!='titulo' ? 'desc' : 'asc')
                ->has('votaciones','>',0)
                ->withWhereHas('temas', function ($query) use ($temaId) {
                    $query->where('id', $temaId);
                })->recomendar($request)
                ->get();
        } else {
            $librosRecomendados = Libro::withAvg('votaciones', 'voto')
                ->withcount('votaciones')
                ->has('votaciones','>',0)
                ->orderBy($request->ordenar, $request->ordenar!='titulo' ? 'desc' : 'asc') 
                ->recomendar($request)
                ->get();
        }


        $ordenados = $librosRecomendados;


        return $ordenados;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
