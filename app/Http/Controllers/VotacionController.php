<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVotacionRequest;
use App\Http\Requests\UpdateVotacionRequest;
use App\Models\Libro;
use App\Models\User;
use App\Models\Votacion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;

class VotacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function votar(StoreVotacionRequest $request)
    {

        /*  */
        $votaciones = Votacion::where('user_id',auth()->id())->get();
        $voto = $votaciones->where('libro_id', $request->libro)->first();
        Log::info($votaciones);
        Log::info($voto);

        if ($request->nota){

            Log::info($request->nota);
    
    
            if($voto){
    
                $voto->voto = $request->nota;
                $voto->save();
    
            }else{
    
                $voto = new Votacion();
    
                $voto->voto = $request->nota;
                $voto->user_id = auth()->id();
                $voto->libro_id = $request->libro;
    
                $voto->save();
    
            }
    
    
        }else{

            $voto->delete();
            Log::info('nulo');


        }
        
        $media = Libro::find($request->libro)->votaciones->avg('voto');

        $media = is_int($media)? number_format( $media): number_format($media, 1); 

        return $media;



    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$votaciones = auth()->user()->votaciones->sortByDesc('voto');
        $votaciones = auth()->user()->votaciones;

        //return $votaciones;

        
        return view('user.profiles.mis-votaciones',compact('votaciones'));
    }


    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function votosUsuario(User $user, Libro $libro)
    {
        Paginator::defaultView('paginate');
        //$votaciones = auth()->user()->votaciones->sortByDesc('voto');
        //$votaciones = $user->votaciones;

        $votaciones = Votacion::where('user_id', $user->id)->paginate(15);

        //return $votaciones;

        
        return view('user.votaciones.votos_usuario',compact('votaciones','user','libro'));
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
