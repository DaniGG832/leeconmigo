<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreForoRequest;
use App\Http\Requests\UpdateForoRequest;
use App\Models\Foro;

class ForoController extends Controller
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
     * @param  \App\Http\Requests\StoreForoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foro  $foro
     * @return \Illuminate\Http\Response
     */
    public function show(Foro $foro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foro  $foro
     * @return \Illuminate\Http\Response
     */
    public function edit(Foro $foro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateForoRequest  $request
     * @param  \App\Models\Foro  $foro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForoRequest $request, Foro $foro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foro  $foro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foro $foro)
    {
        //
    }
}
