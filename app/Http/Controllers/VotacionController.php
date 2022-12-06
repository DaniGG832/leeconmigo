<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVotacionRequest;
use App\Http\Requests\UpdateVotacionRequest;
use App\Models\Votacion;

class VotacionController extends Controller
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
     * @param  \App\Http\Requests\StoreVotacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVotacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Votacion  $votacion
     * @return \Illuminate\Http\Response
     */
    public function show(Votacion $votacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Votacion  $votacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Votacion $votacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVotacionRequest  $request
     * @param  \App\Models\Votacion  $votacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVotacionRequest $request, Votacion $votacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Votacion  $votacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Votacion $votacion)
    {
        //
    }
}
