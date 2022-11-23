<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEdadRequest;
use App\Http\Requests\UpdateEdadRequest;
use App\Models\Edad;
use Illuminate\Support\Facades\Storage as FacadesStorage;


class EdadController extends Controller
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
     * @param  \App\Http\Requests\StoreEdadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEdadRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Edad  $edad
     * @return \Illuminate\Http\Response
     */
    public function show(Edad $edad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Edad  $edad
     * @return \Illuminate\Http\Response
     */
    public function edit(Edad $edad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEdadRequest  $request
     * @param  \App\Models\Edad  $edad
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEdadRequest $request, Edad $edad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Edad  $edad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Edad $edad)
    {
        //
    }
}
