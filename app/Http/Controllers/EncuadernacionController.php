<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEncuadernacionRequest;
use App\Http\Requests\UpdateEncuadernacionRequest;
use App\Models\Encuadernacion;

class EncuadernacionController extends Controller
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
     * @param  \App\Http\Requests\StoreEncuadernacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEncuadernacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Encuadernacion  $encuadernacion
     * @return \Illuminate\Http\Response
     */
    public function show(Encuadernacion $encuadernacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Encuadernacion  $encuadernacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Encuadernacion $encuadernacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEncuadernacionRequest  $request
     * @param  \App\Models\Encuadernacion  $encuadernacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEncuadernacionRequest $request, Encuadernacion $encuadernacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Encuadernacion  $encuadernacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encuadernacion $encuadernacion)
    {
        //
    }
}
