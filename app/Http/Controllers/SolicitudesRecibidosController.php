<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Recibido;
use App\Models\Solicitud;
use App\Models\Solicitud_Aula;
use App\Models\User;


use Illuminate\Http\Request;
class SolicitudesRecibidosController extends Controller
{
    public function llegada(){
       //ordenar por create_at
        $recibidos = Solicitud::where('estado','=','0')->orderby('created_at', 'asc')->paginate(8);
        $valor=1;
        return view('Solicitud.received',compact('recibidos','valor'));
    }
    public function prioridad(){
        //ordenar por create_at
         $recibidos = Solicitud::where('estado','=','0')->orderby('fecha', 'asc')->paginate(8);
         $valor=2;
         return view('Solicitud.received',compact('recibidos','valor'));
     }

     public function update($id,Request $request){
        $mensaje = "";
        $estado=0;
        $registro = Solicitud::whereId($id)->firstOrFail();
        /* 'gestion',
        'usuario',
        'estado',
        'mensaje',
        'admin',
        'motivo',
        'fecha',
        'inicio',
        'final',
        'total' */

        //dd(intval($request['estado']) === 2);

        //dd($registro);
        if (intval($request['estado']) === 2){
             //cargamos el array general

            cargar_array_aulas($registro->fecha, $registro->inicio, $registro->final);
            //dd($registro->relacion_aulas);
            //verificamos si las aulas ya estan reservadas
            $estado=2;
            $mensaje = "la Solicitud fue ACEPTADA, estado actualizado con exito";
            foreach($registro->relacion_aulas as $aula){
                if (verificar_existe_aula($aula->aula)){
                    //si existe :sale del ciclo y guarda en estado=1
                    $estado=1; //el estado es cancelado
                    $mensaje = "la Solicitud fue RECHAZADA, estado actualizado con exito";
                    break;
                }
            }
            $registro->estado=$estado;
        }else{
            $mensaje = "la Solicitud fue ACEPTADA, estado actualizado con exito";
            $registro->estado=$request['estado'];
        }

        $registro->admin=auth()->user()->id;
        $registro->save();

        //falta guardar en reservas

        return redirect()->route('recibido.prioridad')->with('status',$mensaje);

     }
}
