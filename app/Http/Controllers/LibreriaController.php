<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLibreriaRequest;
use App\Http\Requests\UpdateLibreriaRequest;
use App\Models\Libreria;
use App\Models\Libro;
use App\Models\Provincia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class LibreriaController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userIndex(Request $request)
    {



        $provinciaSeleccionada = '';
        if ($request->provincia) {

            //return $request->provincia;
            $provinciaSeleccionada = Provincia::find($request->provincia)->nombre;
        }

        //return $provinciaSeleccionada;

        $provincias = Provincia::has('librerias')->get();

        //$librerias = Libreria::orderBy('provincia_id')->get();
        $librerias = Libreria::mostrarProvincia($request->provincia)->orderBy('provincia_id')->get();
        //$librerias = $librerias->groupBy('provincia_id');

        //return $librerias;
        //return $provincias;
        return view('user.librerias.index', compact('librerias', 'provincias', 'provinciaSeleccionada'));
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
        //return $request->validated();

        $libreria = new Libreria($request->validated());

        if (isset($request->validated()['img'])) {

            $imagen = $request->validated()['img']->store('public/imagenes/librerias');

            $url = FacadesStorage::url($imagen);

            $libreria->img = $url;
        }
        //return $libro;

        $libreria->save();


        return back()->with('success', "Libreria $libreria->nombre añadida correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libreria  $libreria
     * @return \Illuminate\Http\Response
     */
    public function show(Libreria $libreria)
    {

        return view('admin.librerias.show', compact('libreria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libreria  $libreria
     * @return \Illuminate\Http\Response
     */
    public function edit(Libreria $libreria)
    {

        $provincias = Provincia::all();

        return view(
            'admin.librerias.edit',
            compact(
                'provincias',
                'libreria',
            )
        );
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
        //return $request->validated();
        //return $libreria;

        $libreria->fill($request->validated());


        if (isset($request->validated()['img'])) {

            $imagen = $request->validated()['img']->store('public/imagenes/libros');

            $url = FacadesStorage::url($imagen);

            $libreria->img = $url;
        }


        $libreria->save();

        return redirect()->route('admin.librerias.index')->with('success', "Librería $libreria->nombre editada correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libreria  $libreria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libreria $libreria)
    {
        $imagen = public_path() . $libreria->img;
        //return $mi_imagen;
        if (@getimagesize($imagen)) {

            unlink($imagen);
        }

        $libreria->delete();

        return redirect()->route('admin.librerias.index')->with('success', 'Librería borrada correctamente');
    }
}
