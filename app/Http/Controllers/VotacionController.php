<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVotacionRequest;
use App\Http\Requests\UpdateVotacionRequest;
use App\Models\Libro;
use App\Models\User;
use App\Models\Votacion;
use Illuminate\Http\Request;
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
    public function index(Request $request)
    {

        //return $request->ordenVoto;

        /* TODO: select para ordenar mis votaciones */
        $votaciones = auth()->user()->votaciones;
        //$votaciones = auth()->user()->votaciones;

        

            //dd($request->ordenVoto);
            switch ($request->ordenVoto) {
                case 1:
                    /* voto mas alto a mas bajo*/
                    $votacionesOrdenadas = $votaciones->sortByDesc('voto');
                    
                    break;
                case 2:
                    /* voto mas bajo a mas alto */
                    $votacionesOrdenadas =$votaciones->sortBy('voto');
                    ;
                    break;
                case 3:
                    /* mas recientas */
                    $votacionesOrdenadas = $votaciones->sortByDesc('updated_at');
                    //dd(3);
                    break;
                case 4:
                    /* menos recientes */
                    $votacionesOrdenadas = $votaciones->sortBy('updated_at');
                    
                    break;
                
                default:
                $votacionesOrdenadas = $votaciones->sortByDesc('updated_at');
                
            }
        

        //return $votaciones->values()->all();

        
        return view('user.profiles.mis-votaciones',compact('votacionesOrdenadas'));
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
