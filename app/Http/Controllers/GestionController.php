<?php

namespace App\Http\Controllers;

use App\Models\Gestion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        setlocale(LC_ALL, 'es_ES');
        $gestiones = Gestion::orderby('inicio', 'asc')->paginate(8);

        return view('gestion.index', compact('gestiones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestion.create');
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
            'detalle' => 'required|min:5|max:50|string|alpha_dash|unique:gestiones,detalle',
            'inicio' => 'required|date',
            'final' => 'required|date',

        ]);


        //dd($data);
        $gestion = new Gestion();
        $gestion->fill($data);
        $gestion->estado=2;
        $gestion->save();
        return redirect()->route('gestion.index')->with('status', 'Gestion registrada con Exito!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gestion  $gestion
     * @return \Illuminate\Http\Response
     */
    public function show(Gestion $gestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gestion  $gestion
     * @return \Illuminate\Http\Response
     */
    public function edit(Gestion $gestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gestion  $gestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gestion $gestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gestion  $gestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gestion $gestion)
    {
        //
    }
}
