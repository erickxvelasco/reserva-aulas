<?php


namespace App\Http\Controllers;

//use App\helpers\codifica;
//use App\helpers;
//use Helpers\codifica ; //helpers

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
use App\Models\Solicitud_Aula;
use App\Models\Solicitud_Grupo;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //si solo es gestion actual hacr otro where
        $solicitudes = Solicitud::where('usuario', auth()->user()->id)->orderby('created_at', 'desc')->paginate(8);
        return view('Solicitud.index', compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($data = null)
    {
        $gestion = Gestion::where('estado', '=', 1)->first();
        $ubicaciones = Ubicacion::all();
        $plantas = Planta::all();
        if ($data == null) {
            $fecha_actual = Carbon::now();
            $fecha_actual=$fecha_actual->addDay(1);
            $fecha_actual = $fecha_actual->format('Y-m-d');

            $data = ["total" => "0", "fecha" => $fecha_actual, "motivo" => '', "hora_inicio" => 1, "hora_final" => 2, "ubicacion" => 0, "planta" => 0, "capacidad" => 50];
        } else {
            //dd($data);
        }

        return view('Solicitud.create', compact('gestion', 'ubicaciones', 'plantas', 'data'));
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
        $gestion = Gestion::where('estado', '1')->first();
        $reserva = new Solicitud();
        $reserva->gestion = $gestion->id;
        $reserva->usuario = auth()->user()->id;
        $reserva->estado = 0;
        $reserva->mensaje = "";
        $reserva->admin = 0;
        $reserva->motivo = $request['motivo'];
        $reserva->fecha = $request['fecha'];
        $reserva->inicio = $request['hora_inicio'];
        $reserva->final = $request['hora_final'];
        $reserva->total = $request['total'];
        $reserva->save();
        //guardar reserva_aulas
        foreach ($request['aula'] as $item) {
            $aula = new Solicitud_Aula();
            $aula->solicitud = $reserva->id;
            $aula->aula = $item;
            $aula->save();
        }
        if (!empty($request['grupo'])) {
            foreach ($request['grupo'] as $item) {
                $grupo = new Solicitud_Grupo();
                $grupo->solicitud = $reserva->id;
                $grupo->grupo = $item;
                $grupo->save();
            }
        }

        //guardar reserva_grupos

        //dd($reserva);
        return redirect()->route('solicitud.index')->with('status', 'Solicitud enviada con Exito!!!');
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
        //dd($request->request);
        //dd($ubicacion->relacion_planta['ubicacion']);
        $alumnos = $request['total'];
        $aforo = ($request['capacidad'] / 100);
        $resultado = collect();

        //solo se carga una vez
        cargar_array_aulas($request['fecha'], $request['hora_inicio'], $request['hora_final']);

        if ($request['ubicacion'] == 0) {
            //buscar en todo
            $ubicaciones = Ubicacion::all();
            foreach ($ubicaciones as $ubicacion) {
                foreach ($ubicacion->relacion_plantas as $plantas) {
                    //dd($ubi['planta']);
                    foreach ($plantas->relacion_aulas as $aulas) {
                        //echo($aulas['nombre'].$aulas['capacidad']);
                        //echo ('{erick}');
                        $tupla = "";
                        $total = 0;
                        $id = array();
                        while ($aulas != null) {
                            $total += ($aulas['capacidad'] * $aforo);
                            //echo ($aulas['nombre'] . "+" . $aulas['capacidad'] . " - ");
                            $tupla .= $aulas['nombre'] . "[" . $aulas['capacidad'] . "]";
                            $id[] = $aulas['id'];
                            if (verificar_existe_aula($aulas['id'])) {
                                //es true existe entonces tenemos que limpiar las variables
                                $aulas = null;
                                $id = [];
                            } else {
                                //$tupla=$aulas;
                                if ($total >= ($alumnos * 0.9)) {

                                    //ya se cumplio la cuota
                                    //escribimos las aulas
                                    //guardamos la tupla
                                    //ANTES DE GUARDAR->MANDAMOS EL AULA A UN METODO PARA VERIFICAR SI PARA LA FECHA SOLICITADA YA ESTA RESERVADA
                                    //->ENCASO DE QUE ESTE RESERVADO -> SALIR INMEDIATAMENTE
                                    //SINO->CONTINUE
                                    //echo (' *GUARDADO* ');
                                    //dd($id);
                                    $tupla = ["aulas" => $tupla];
                                    //$id=["id" => $id];

                                    $tupla = Arr::add($tupla, 'id', $id);

                                    $resultado->push(collect(Arr::add($tupla, 'total', (int) $total)));

                                    //$resultado->push(collect(Arr::add($tupla, 'total', (int) $total,'id',$id )));

                                    //echo $resultado['aulas'] . "{" . $resultado['total'] . "}";
                                    //salimos del while
                                    $aulas = null;
                                    $id = [];
                                } else {
                                    $tupla .= " - ";
                                    $aulas = $aulas->relacion_aulasig;
                                }
                            }
                        }
                    }
                }
            }
        } else {
            if ($request['planta'] == 0) {
                //recorremos desde el segundo foreach
                $ubicacion = Ubicacion::where('id',$request['ubicacion'])->first();
                foreach ($ubicacion->relacion_plantas as $plantas) {
                    //dd($ubi['planta']);
                    foreach ($plantas->relacion_aulas as $aulas) {
                        //echo($aulas['nombre'].$aulas['capacidad']);
                        //echo ('{erick}');
                        $tupla = "";
                        $total = 0;
                        $id = array();
                        while ($aulas != null) {
                            $total += ($aulas['capacidad'] * $aforo);
                            //echo ($aulas['nombre'] . "+" . $aulas['capacidad'] . " - ");
                            $tupla .= $aulas['nombre'] . "[" . $aulas['capacidad'] . "]";
                            $id[] = $aulas['id'];
                            if (verificar_existe_aula($aulas['id'])) {
                                //es true existe entonces tenemos que limpiar las variables
                                $aulas = null;
                                $id = [];
                            } else {
                                //$tupla=$aulas;
                                if ($total >= ($alumnos * 0.9)) {

                                    //ya se cumplio la cuota
                                    //escribimos las aulas
                                    //guardamos la tupla
                                    //ANTES DE GUARDAR->MANDAMOS EL AULA A UN METODO PARA VERIFICAR SI PARA LA FECHA SOLICITADA YA ESTA RESERVADA
                                    //->ENCASO DE QUE ESTE RESERVADO -> SALIR INMEDIATAMENTE
                                    //SINO->CONTINUE
                                    //echo (' *GUARDADO* ');
                                    //dd($id);
                                    $tupla = ["aulas" => $tupla];
                                    //$id=["id" => $id];

                                    $tupla = Arr::add($tupla, 'id', $id);

                                    $resultado->push(collect(Arr::add($tupla, 'total', (int) $total)));

                                    //$resultado->push(collect(Arr::add($tupla, 'total', (int) $total,'id',$id )));

                                    //echo $resultado['aulas'] . "{" . $resultado['total'] . "}";
                                    //salimos del while
                                    $aulas = null;
                                    $id = [];
                                } else {
                                    $tupla .= " - ";
                                    $aulas = $aulas->relacion_aulasig;
                                }
                            }
                        }
                    }
                }
            } else {
                $planta = Planta::where('id',$request['planta'])->first();
                //recorremos solo el ultimo foreach
                foreach ($planta->relacion_aulas as $aulas) {
                    //echo($aulas['nombre'].$aulas['capacidad']);
                    //echo ('{erick}');
                    $tupla = "";
                    $total = 0;
                    $id = array();
                    while ($aulas != null) {
                        $total += ($aulas['capacidad'] * $aforo);
                        //echo ($aulas['nombre'] . "+" . $aulas['capacidad'] . " - ");
                        $tupla .= $aulas['nombre'] . "[" . $aulas['capacidad'] . "]";
                        $id[] = $aulas['id'];
                        if (verificar_existe_aula($aulas['id'])) {
                            //es true existe entonces tenemos que limpiar las variables
                            $aulas = null;
                            $id = [];
                        } else {
                            //$tupla=$aulas;
                            if ($total >= ($alumnos * 0.9)) {

                                //ya se cumplio la cuota
                                //escribimos las aulas
                                //guardamos la tupla
                                //ANTES DE GUARDAR->MANDAMOS EL AULA A UN METODO PARA VERIFICAR SI PARA LA FECHA SOLICITADA YA ESTA RESERVADA
                                //->ENCASO DE QUE ESTE RESERVADO -> SALIR INMEDIATAMENTE
                                //SINO->CONTINUE
                                //echo (' *GUARDADO* ');
                                //dd($id);
                                $tupla = ["aulas" => $tupla];
                                //$id=["id" => $id];

                                $tupla = Arr::add($tupla, 'id', $id);

                                $resultado->push(collect(Arr::add($tupla, 'total', (int) $total)));

                                //$resultado->push(collect(Arr::add($tupla, 'total', (int) $total,'id',$id )));

                                //echo $resultado['aulas'] . "{" . $resultado['total'] . "}";
                                //salimos del while
                                $aulas = null;
                                $id = [];
                            } else {
                                $tupla .= " - ";
                                $aulas = $aulas->relacion_aulasig;
                            }
                        }
                    }
                }
            }
        }




        //dd($resultado);


        /*

        $gestion = Gestion::where('estado', '=', 1)->first();
        $ubicaciones = Ubicacion::all();
        $plantas = Planta::all();

        $data=$request;
        */
        //dd($resultado);
        $sessionManager->flash('aulas', $resultado);


        //lo mas optimo es mandar un mensaje flash para cada campo importante
        //grupos
        $grupo_array = [];
        if (!empty($request['grupos'])) {
            foreach ($request['grupos'] as $grupo) {
                $gru = json_decode($grupo, true);
                array_push($grupo_array, $gru['id']);
            }
        }
        $sessionManager->flash('grupos', $grupo_array);
        //total
        $sessionManager->flash('total', $request['total']);
        //motivo
        $sessionManager->flash('motivo', $request['motivo']);
        //fecha
        $sessionManager->flash('fecha', $request['fecha']);
        //hora_inicio
        $sessionManager->flash('hora_inicio', $request['hora_inicio']);
        //hora_final
        $sessionManager->flash('hora_final', $request['hora_final']);
        //capacidad
        $sessionManager->flash('capacidad', $request['capacidad']);


        //dd(verificar_aulas("asd","asd","asd"));
        //dd(verificar_reserva("asd","asd","asd"));


        //route('solicitud.create');

        //return view('Solicitud.create', compact('gestion', 'ubicaciones', 'plantas','data'));
        //return redirect()->route('solicitud.create',$data);


        return redirect()->back()->withInput();
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
