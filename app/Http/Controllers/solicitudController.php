<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Reserva;
use Illuminate\Http\Request;

class solicitudController extends Controller
{
    public function create(){
        return view('form.solicitud');
    }
    public function store(Request $request){
         $reserva= new Reserva($request->all());
         $reserva->save();
         return redirect()->back();
        /*$solicitud = Reserva::create($request->all());
        return response()->json($solicitud);*/

        /*Reserva::created($request->all());
        return redirect()->back();*/


    }
}
