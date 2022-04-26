<?php


namespace App\Http\Controllers;

use Helpers\Codifica;//helpers

use App\Models\Solicitud;
use App\Http\Controllers\Controller;
use App\Models\Gestion;

use App\Models\Planta;
use App\Models\Ubicacion;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

use Illuminate\Session\SessionManager;


use App\Http\Requests\SolicitudRequest;

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
        $gestion = Gestion::where('estado', '=', 1)->first();
        $ubicaciones = Ubicacion::all();
        $plantas = Planta::all();



        $fecha_actual=Carbon::now();
        $fecha_actual=$fecha_actual->format('Y-m-d');
        $data=["total"=>"0","fecha"=>$fecha_actual,"motivo"=>'',"hora_inicio"=>1,"hora_final"=>2,"ubicacion"=>0,"planta"=>0,"capacidad"=>50];

        return view('Solicitud.create', compact('gestion', 'ubicaciones', 'plantas','data'));
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

    public function permutaciones(SolicitudRequest $request, SessionManager $sessionManager)
    {
        //en request vienen los parametros
        //dd($request);


        $ubicaciones = Ubicacion::all();
        //dd($ubicacion->relacion_planta['ubicacion']);
        $alumnos = $request['total'];
        $aforo = ($request['capacidad'] / 100);
        $resultado=collect();

        foreach ($ubicaciones as $ubicacion) {
            foreach ($ubicacion->relacion_plantas as $plantas) {
                //dd($ubi['planta']);
                foreach ($plantas->relacion_aulas as $aulas) {
                    //echo($aulas['nombre'].$aulas['capacidad']);
                    //echo ('{erick}');
                    $tupla="";
                    $total = 0;
                    while ($aulas != null) {
                        $total += ($aulas['capacidad'] * $aforo);
                        //echo ($aulas['nombre'] . "+" . $aulas['capacidad'] . " - ");
                        $tupla.=$aulas['nombre'] . "[" . $aulas['capacidad'] . "]";
                        if ($total >= ($alumnos * 0.9)) {

                            //ya se cumplio la cuota
                            //escribimos las aulas
                            //guardamos la tupla
                            //ANTES DE GUARDAR->MANDAMOS EL AULA A UN METODO PARA VERIFICAR SI PARA LA FECHA SOLICITADA YA ESTA RESERVADA
                            //->ENCASO DE QUE ESTE RESERVADO -> SALIR INMEDIATAMENTE
                            //SINO->CONTINUE
                            //echo (' *GUARDADO* ');
                            $tupla=["aulas" => $tupla];
                            $resultado->push(collect(Arr::add($tupla, 'total', (int) $total )));

                            //echo $resultado['aulas'] . "{" . $resultado['total'] . "}";
                            //salimos del while
                            $aulas = null;
                        } else {
                            $tupla.=" - ";
                            $aulas = $aulas->relacion_aulasig;
                        }
                    }
                }
            }
        }

        //dd($resultado);

        $gestion = Gestion::where('estado', '=', 1)->first();
        $ubicaciones = Ubicacion::all();
        $plantas = Planta::all();




        $data=$request;
        $sessionManager->flash('aulas', $resultado );

        return view('Solicitud.create', compact('gestion', 'ubicaciones', 'plantas','data'))->with('aulas',$resultado);


        //Return back()->with('aulas',$resultado);
        //volvemos atras y mandamos la coleccion como mensaje de sesion

    }

    private function verificar_reserva($aula)
    {
        //buscamos en la bd reserva
        //necesitamos fecha y rango de horas()

        //devolvemos true o false
        return false;
    }




}
