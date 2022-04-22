<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Http\Controllers\Controller;
use App\Models\Gestion;
use App\Models\Planta;
use App\Models\Ubicacion;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gestion=Gestion::where('estado','=',1)->first();

        return view('Solicitud.create',compact('gestion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitud $solicitud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitud $solicitud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitud $solicitud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitud $solicitud)
    {
        //
    }

    public function permutaciones(Request $request)
    {
        //en request vienen los parametros
        $ubicaciones=Ubicacion::all()->first();
        //dd($ubicacion->relacion_planta['ubicacion']);
        $alumnos=220;
        foreach( $ubicaciones->relacion_plantas as $plantas){
            //dd($ubi['planta']);
            foreach($plantas->relacion_aulas as $aulas){
               //echo($aulas['nombre'].$aulas['capacidad']);
               echo('{erick}');
               $total=0;
               while($aulas != null){

                    $total+=($aulas['capacidad']*0.5);
                    echo($aulas['nombre']."+".$aulas['capacidad']." - ");
                    if($total>=($alumnos*0.9) && $total<=$alumnos*1.1){
                        //ya se cumplio la cuota
                        //escribimos las aulas
                        //guardamos la tupla
                        //ANTES DE GUARDAR->MANDAMOS EL AULA A UN METODO PARA VERIFICAR SI PARA LA FECHA SOLICITADA YA ESTA RESERVADA
                        //->ENCASO DE QUE ESTE RESERVADO -> SALIR INMEDIATAMENTE
                        //SINO->CONTINUE
                        echo(' *GUARDADO* ');
                        //salimos del while
                        $aulas=null;
                    }else{
                        $aulas=$aulas->relacion_aulasig;

                    }



               }


            }
        }



    }
}
