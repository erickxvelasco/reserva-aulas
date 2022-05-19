<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /* *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::orderby('descripcion', 'asc')->paginate(8);

        return view('materia.index', compact('materias'));
    }

    /* *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $departamentos = [
            ['id' => 1, 'departamento' => 'departamento de Informatica y Sistemas'],
            ['id' => 2, 'departamento' => 'departamento de Civil'],
            ['id' => 3, 'departamento' => 'departamento de Fisica'],
            ['id' => 4, 'departamento' => 'departamento de Quimica'],
            ['id' => 5, 'departamento' => 'departamento de Biologia'],
            ['id' => 6, 'departamento' => 'departamento de Industrial'],
            ['id' => 7, 'departamento' => 'departamento de Electrica'],
            ['id' => 8, 'departamento' => 'departamento de Electronica']
        ];



        return view('materia.create', compact('departamentos'));
    }

    /* *
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'descripcion' => 'required|min:3|max:50|regex:/^[\pL\s\-]+$/u|unique:materias',
            'departamento' => 'required|min:3|max:50|regex:/^[\pL\s\-]+$/u'
        ]);

        $materia = new Materia();
        $materia->fill($data);
        $materia->save();
        return redirect()->route('materia.index')->with('status', 'Materia registrada con Exito!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /* *
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $departamentos = [
            ['id' => 1, 'departamento' => 'departamento de Informatica y Sistemas'],
            ['id' => 2, 'departamento' => 'departamento de Civil'],
            ['id' => 3, 'departamento' => 'departamento de Fisica'],
            ['id' => 4, 'departamento' => 'departamento de Quimica'],
            ['id' => 5, 'departamento' => 'departamento de Biologia'],
            ['id' => 6, 'departamento' => 'departamento de Industrial'],
            ['id' => 7, 'departamento' => 'departamento de Electrica'],
            ['id' => 8, 'departamento' => 'departamento de Electronica']
        ];


        $registro = Materia::whereId($id)->firstOrFail();

        //dd($registro);
        return view('materia.edit', compact('registro', 'departamentos'));
    }

    /* *
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update($id ,Request $request )
    {

        $materia = Materia::whereId($id)->firstOrFail();
        //dd($request);
        $data = $request->validate([
            'descripcion' => 'required|min:3|max:50|regex:/^[\pL\s\-]+$/u|unique:materias,descripcion,' . $id,
            'departamento' => 'required|min:3|max:50|regex:/^[\pL\s\-]+$/u'
        ]);

        $materia->update($data);

        return redirect()->route('materia.index')->with('status', 'Materia actualizada con Exito!!!');
    }

    /* *
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        //
    }
}
