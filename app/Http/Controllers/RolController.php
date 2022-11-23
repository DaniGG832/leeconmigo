<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRolRequest;
use App\Http\Requests\UpdateRolRequest;
use App\Models\Autor;
use App\Models\Ilustrador;
use App\Models\Libro;
use App\Models\Rol;
use App\Models\User;

use function Ramsey\Uuid\v1;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $totalUsuarios = User::all()->count();
        $totalLibros = Libro::all()->count();
        $totalAutores = Autor::all()->count();
        $totalIlustrador = Ilustrador::all()->count();

        return view('admin.admin', compact('totalUsuarios', 'totalLibros', 'totalLibros'));
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
     * @param  \App\Http\Requests\StoreRolRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRolRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit(Rol $rol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRolRequest  $request
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRolRequest $request, Rol $rol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rol $rol)
    {
        //
    }
}
