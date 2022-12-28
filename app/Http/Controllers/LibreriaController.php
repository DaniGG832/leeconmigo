<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLibreriaRequest;
use App\Http\Requests\UpdateLibreriaRequest;
use App\Models\Libreria;
use App\Models\Libro;
use App\Models\Provincia;
use App\Models\User;

class LibreriaController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userIndex()
    {
        $librerias = Libreria::all();
        return view('user.librerias.index', compact('librerias'));
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $libros = Libro::all();
        $librerias = Libreria::all();
        $libros = $libros->sortByDesc('year');
        $totalUsuarios = User::all()->count();
        $totalLibros = Libro::all()->count();

        //return $librerias[0]->provincia->librerias;

        $librerias = Libreria::all();
        return view('admin.librerias.index', compact(['librerias', 'libros', 'totalUsuarios', 'totalLibros']));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libreria = new Libreria();
        $provincias = Provincia::all();

        return view(
            'admin.librerias.create',
            compact(
                'libreria',
                'provincias',
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLibreriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLibreriaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libreria  $libreria
     * @return \Illuminate\Http\Response
     */
    public function show(Libreria $libreria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libreria  $libreria
     * @return \Illuminate\Http\Response
     */
    public function edit(Libreria $libreria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLibreriaRequest  $request
     * @param  \App\Models\Libreria  $libreria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLibreriaRequest $request, Libreria $libreria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libreria  $libreria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libreria $libreria)
    {
        //
    }
}
