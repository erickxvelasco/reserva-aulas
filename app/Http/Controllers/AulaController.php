<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Ubicacion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aulas = Aula::orderby('planta', 'asc')->paginate(8);

        return view('aula.index', compact('aulas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ubicaciones=Ubicacion::all();
       //dd($materias_materias);
        $aulas=Aula::orderBy('nombre')->get();
        return view('aula.create', compact('ubicaciones','aulas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'nombre' => 'required|min:3|max:20|string|unique:aulas',
            'aulasig' => 'nullable|numeric|min:0',
            'planta' => 'required|min:1',
            'capacidad' => 'required|numeric|between:10,500'
        ]);

        $grupo = new Aula();
        $grupo->fill($data);
        $grupo->save();
        return redirect()->route('aula.index')->with('status', 'Aula registrada con Exito!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function show(Aula $aula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = Aula::whereId($id)->firstOrFail();

        $ubicaciones=Ubicacion::all();
         $aulas=Aula::where('id','<>',$id)->orderBy('nombre')->get();
         return view('aula.edit', compact('registro','ubicaciones','aulas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aula = Aula::whereId($id)->firstOrFail();
        //dd($request);
        $data = $request->validate([
            'nombre' => 'required|min:3|max:20|string|unique:aulas,nombre,' . $id,
            'aulasig' => 'nullable|numeric|min:0',
            'planta' => 'required|min:1',
            'capacidad' => 'required|numeric|between:10,500'
        ]);

        $aula->update($data);

        return redirect()->route('aula.index')->with('status', 'Aula actualizada con Exito!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aula $aula)
    {
        //
    }
}
