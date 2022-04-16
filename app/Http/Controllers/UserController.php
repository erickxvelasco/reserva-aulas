<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Expedido;

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
    }

    public function create()
    {
        $expedidos=Expedido::orderBy('lugar','asc')->get();
        return view('users.create',compact('expedidos'));

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
        echo("editar" . $id);

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
