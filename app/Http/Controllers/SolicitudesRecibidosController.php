<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Recibido;
use App\Models\Solicitud;
use App\Models\Solicitud_Aula;
use App\Models\User;
class SolicitudesRecibidosController extends Controller
{
    public function llegada(){
       //ordenar por create_at
        $recibidos = Solicitud::where('estado','=','0')->orderby('created_at', 'asc')->paginate(8);
        return view('Solicitud.received',compact('recibidos'));
    }
    public function prioridad(){
        //ordenar por create_at
         $recibidos = Solicitud::where('estado','=','0')->orderby('fecha', 'asc')->paginate(8);
         return view('Solicitud.received',compact('recibidos'));
     }
}
