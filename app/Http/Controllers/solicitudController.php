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
    }
}
