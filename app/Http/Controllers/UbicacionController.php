<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ubicaciones = Ubicacion::orderby('ubicacion', 'asc')->paginate(8);

        return view('ubicacion.index', compact('ubicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ubicacion.create');
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
            'ubicacion' => 'required|min:3|max:50|regex:/^[\pL\s\-]+$/u|unique:ubicaciones',
            'detalle' => 'required|min:3|max:50|regex:/^[\pL\s\-]+$/u'
        ]);

        $ubicacion = new Ubicacion();
        $ubicacion->fill($data);
        $ubicacion->save();
        return redirect()->route('ubicacion.index')->with('status', 'Ubicacion Registrada con Exito!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = Ubicacion::whereId($id)->firstOrFail();

        //dd($registro);
        return view('ubicacion.edit', compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ubicacion $ubicacion)
    {

        //dd($request);
        $data = $request->validate([
            'ubicacion' => 'required|min:3|max:50|regex:/^[\pL\s\-]+$/u|unique:ubicaciones,ubicacion,' . $ubicacion->id,
            'detalle' => 'required|min:3|max:50|regex:/^[\pL\s\-]+$/u'
        ]);

        $ubicacion->update($data);

        return redirect()->route('ubicacion.index')->with('status', 'Ubicacion actualizada con Exito!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ubicacion $ubicacion)
    {
        //
    }
}
