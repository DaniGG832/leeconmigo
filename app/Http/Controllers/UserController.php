<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Libro;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage as FacadesStorage;


class UserController extends Controller
{

 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* public function profile()
    {
        $user = User::find(Auth()->id());
        //return $user;
        return view('user.profiles.profile',compact('user'));
    } */

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $totalLibros = Libro::all()->count();
        $totalUsuarios = User::all()->count();

        //return $users;
        return view('admin.users.index', compact(['users', 'totalUsuarios','totalLibros']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $user = User::find(Auth()->id());

        //return $user;

        return view('user.profiles.profile',compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = User::find(Auth()->id());
        //return $user;
        return view('user.profiles.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {

        /* TODO: guardar la imagen en la base de datos */
        $user->fill($request->validated());

        //return $user;

        if (isset( $request->validated()['avatar'])) {
            
            $avatar =$request->validated()['avatar']->store('public/imagenes/avatar');
            
            $url = FacadesStorage::url($avatar);

            $user->avatar = $url;
        }
        /* return $user;
        return $request->avatar;


        $user->name = $request->input('name'); */
        $user->save();



        return redirect()->back()->with('success', "Usuario editado correctamente.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
