<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Expedido;
use App\Models\Cargo;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users=User::all();

       return view('users.index', compact('users'));
         // $user=User::find(1)->expedid_o;
        // dd($user);
        //dd( $users);
        //dd($users->cargo);
        //
    }

    public function create()
    {
        $expedidos=Expedido::orderBy('lugar','asc')->get();
        $cargos=Cargo::orderBy('descripcion','asc')->get();

        return view('users.create',compact('expedidos','cargos'));

    }
    public function store(UserRequest $request)
    {
        //dd($request->validated());
        //
        $validated = $request->validated();
        $validated['password']= Hash::make($validated['password']);
        User::create($validated);
        Return redirect()->route('user.index')->with('status','Usuario Registado con Exito!!!');

    }
    public function show($id)
    {

    }
    public function edit($id)
    {
        $expedidos=Expedido::orderBy('lugar','asc')->get();
        $registro = User::whereId($id)->firstOrFail();
        $cargos=Cargo::orderBy('descripcion','asc')->get();
        //dd($registro);
        return view('users.edit', compact('registro','expedidos','cargos'));
    }

    public function update(User $user, UserRequest $request)
    {

        $validated = $request->validated();
        if(strlen($validated['password'])>0){
            //si existe otro password valido entonces lo encriptamos y guardamos
            $validated['password']= Hash::make($validated['password']);
        }else{
            //mantenemos el anterior
            $validated['password']=$user->password;
        }
        //dd($validated);


        //$validated['password']= Hash::make($validated['password']);
        //dd($validated);
        $user->update($validated);
        Return redirect()->route('user.index')->with('status','Usuario Modificado con Exito!!!');

    }

    public function destroy($id)
    {
        echo("eliminar" . $id);
    }

    public function asignature($id)
    {
        echo("materias" . $id);
    }
}
