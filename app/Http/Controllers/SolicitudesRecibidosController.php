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
        //dd($request['estado']);

        $registro = Solicitud::whereId($id)->firstOrFail();
        $registro->estado=$request['estado'];
        $registro->admin=auth()->user()->id;
        $registro->save();

        //falta guardar en reservas

        return redirect()->route('recibido.prioridad')->with('status','la Solicitud fue Actualizada con Exito');

     }
}
