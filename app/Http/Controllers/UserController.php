<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Libro;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Illuminate\Pagination\Paginator;


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
        //$userLogadoId = auth()->user()->rol_id;
        //return $userLogadoId;
        $isSuperAdmin = auth()->user()->rol_id == 3;
        $users = User::all();
        $totalLibros = Libro::all()->count();
        $totalUsuarios = User::all()->count();

        //return $users;
        return view('admin.users.index', compact(['isSuperAdmin','users', 'totalUsuarios', 'totalLibros']));
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

        return view('user.profiles.profile', compact('user'));
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
        return view('user.profiles.show', compact('user'));
    }



    /* Editar  */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

    

        if ($user->rol_id == 3) {

            return redirect()->back()->with('error', 'no se puede modificar un usuario superAdmin');

        }else{

            $roles2 = Rol::all();
    
            $roles = $roles2->except(3);

            return view('admin.users.edit', compact('user', 'roles'));

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //return $request;

        if ($user->role_id == 3) {

            return redirect()->back()->with('error', 'no se puede modificar un usuario superAdmin');

        }else{

            $validated =  $request->validate([
                'comentar' => 'required|boolean',
                'rol_id' => 'required|exists:roles,id',
            ]);


            $user->comentar = $validated['comentar'];
            $user->rol_id = $validated['rol_id'];
            $user->save();

            return redirect()->route('admin.users.index')->with('success', 'Usuario editado Correctamente');

        }

        /* if ($user->rol_id != 3 || Auth::user()->rol_id == 3) {
            $validated =  $request->validate([
                'comentar' => 'required|boolean',
                'rol_id' => 'required|exists:roles,id',
            ]);
            //return $validated;
            if ($validated['rol_id'] == 3 && Auth::user()->rol_id == 2) {

                return redirect()->back()->with('error', 'Solo el usuario superAdmin puede asignar el rol  superAdmin');
            } else {

                $user->comentar = $validated['comentar'];
                $user->rol_id = $validated['rol_id'];
                $user->save();

                return redirect()->route('admin.users.index')->with('success', 'Usuario editado Correctamente');
            }
        }

        return redirect()->back()->with('error', 'Solo el superAdmin puede bloquear o cambiar el rol a un usuario superAdmin'); */
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function userUpdate(UpdateUserRequest $request, User $user)
    {

        /* TODO: guardar la imagen en la base de datos */
        $user->fill($request->validated());

        //return $user;

        if (isset($request->validated()['avatar'])) {

            $avatar = $request->validated()['avatar']->store('public/imagenes/avatar');

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

        //return Auth::user()->rol_id ;

        if ($user->rol_id != 3 && Auth::user()->rol_id == 3) {

            $user->votaciones->each->delete();

            foreach ($user->preguntas as $pregunta) {

                $pregunta->respuestas->each->delete();
            }

            $user->preguntas->each->delete();
            $user->respuestas->each->delete();
            $user->criticas->each->delete();
            $user->listaDeseos()->detach();




            $user->delete();
            return back()->with('success', 'Usuario borrado correctamente');
        } elseif (Auth::user()->rol_id == 3) {

            return back()->with('error', 'No se puede borrar un usuario administrados.');
        } else {

            return back()->with('error', 'No tienes permisos para borrar usuarios.');
        }
    }
}
