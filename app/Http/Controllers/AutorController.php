<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAutorRequest;
use App\Http\Requests\UpdateAutorRequest;
use App\Models\Autor;
use App\Models\Libro;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Illuminate\Pagination\Paginator;


class AutorController extends Controller
{

    public function scopeBuscar($query, $data)
    {


        if (isset($data['search'])) {

            //dd($data['search']);

            $query->where('titulo', 'ILIKE', '%' . $data['search'] . '%');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userIndex(Request $request)
    {

        $search = $request->search;

        Paginator::defaultView('paginate');

        $autores = Autor::where('name', 'ILIKE', '%' . $request->search . '%')->orderBy('name')->paginate(15);


        //return $users;
        return view('user.autores.index', compact('autores','search'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function userShow(Autor $autor)
    {
        $libros = $autor->libros()->paginate(15);

        //return $libros;

        return view('user/autores/show', compact('libros', 'autor'));
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Autor::all();
        $totalLibros = Libro::all()->count();
        $totalUsuarios = User::all()->count();

        //return $users;
        return view('admin.autores.index', compact('autores', 'totalUsuarios', 'totalLibros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autor = new Autor();

        return view('admin.autores.create', compact('autor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAutorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAutorRequest $request)
    {
        //dd( $request->validated());

        $autor = new Autor($request->validated());
        if (isset($request->validated()['img'])) {

            $imagen = $request->validated()['img']->store('public/imagenes/autores');

            //return $imagen;

            $url = FacadesStorage::url($imagen);


            $autor->img = $url;
        }

        $autor->save();

        return back()->with('success', "Autor $autor->name registrado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(Autor $autor)
    {
        return view('admin.autores.show', compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(Autor $autor)
    {
        return view('admin.autores.edit', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAutorRequest  $request
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAutorRequest $request, Autor $autor)
    {
        //return $request->validated();

        $autor->fill($request->validated());

        if (isset($request->validated()['img'])) {

            $imagen = $request->validated()['img']->store('public/imagenes/autores');

            $url = FacadesStorage::url($imagen);

            $autor->img = $url;
        }
        $autor->save();

        return redirect()->route('admin.autores.index')->with('success', "autor $autor->name editado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autor)
    {
        //return $autor->libros->count();

        if ($autor->libros->count()) {


            //dd($autor->libros);
            return redirect()->route('admin.autores.index')->with('error', 'No se puede borrar un autor con libros asociadas');
        } else {


            $autor->delete();
            return redirect()->route('admin.autores.index')->with('success', 'autor borrado correctamente');
        }
    }
}
