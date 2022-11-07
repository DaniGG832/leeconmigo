<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIlustradorRequest;
use App\Http\Requests\UpdateIlustradorRequest;
use App\Models\Ilustrador;

class IlustradorController extends Controller
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
     * @param  \App\Http\Requests\StoreIlustradorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIlustradorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ilustrador  $ilustrador
     * @return \Illuminate\Http\Response
     */
    public function show(Ilustrador $ilustrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ilustrador  $ilustrador
     * @return \Illuminate\Http\Response
     */
    public function edit(Ilustrador $ilustrador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIlustradorRequest  $request
     * @param  \App\Models\Ilustrador  $ilustrador
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIlustradorRequest $request, Ilustrador $ilustrador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ilustrador  $ilustrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ilustrador $ilustrador)
    {
        //
    }
}
