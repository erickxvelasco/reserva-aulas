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
    public function index(){

        $recibidos = Solicitud::all();
        return view('Solicitud.received',compact('recibidos'));
    }
}
