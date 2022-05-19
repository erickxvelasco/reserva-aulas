<?php

namespace App\Http\Controllers;


use App\Models\Grupo;
use App\Models\Materia;
use App\Models\User;

use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Grupo::orderby('materia', 'asc')->paginate(8);

        return view('grupo.index', compact('grupos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materias_materias=Materia::all()->groupBy('departamento');
       //dd($materias_materias);
        $users=User::Where('tipo','<>','2')->get();
        return view('grupo.create', compact('materias_materias','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        $data = $request->validate([
            'materia' => 'required|numeric|min:1',
            'usuario' => 'required|numeric|min:1',
            'grupo' => 'required|min:1|max:3',
            'inscritos' => 'required|numeric|between:10,250'
        ]);


        //dd($data);
        $grupo = new Grupo();
        $grupo->fill($data);
        $grupo->save();
        return redirect()->route('grupo.index')->with('status', 'Grupo registrado con Exito!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function show(Grupo $grupo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $registro = Grupo::whereId($id)->firstOrFail();

        $materias_materias=Materia::all()->groupBy('departamento');
        //dd($materias_materias);
         $users=User::Where('tipo','<>','2')->get();
         return view('grupo.edit', compact('registro','materias_materias','users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupo $grupo)
    {
        //dd($request);
           $data = $request->validate([
                'materia' => 'required|numeric|min:1',
                'usuario' => 'required|numeric|min:1',
                'grupo' => 'required|min:1|max:3',
                'inscritos' => 'required|numeric|between:10,250'
            ]);


        $grupo->update($data);

        return redirect()->route('grupo.index')->with('status', 'Grupo Actualizado con Exito!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupo $grupo)
    {
        //
    }
}
