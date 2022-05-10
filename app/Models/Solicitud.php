<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table = 'solicitudes';

    protected $fillable = [
        'gestion',
        'usuario',
        'estado',
        'mensaje',
        'admin',
        'motivo',
        'fecha',
        'inicio',
        'final',
        'total'
    ];

    public function relacion_aulas() {
        $aux=$this->hasmany(Solicitud_Aula::class,'solicitud','id');
        //dd($aux);
        return $aux;
    }
    public function relacion_grupo() {
        $aux=$this->hasmany(Solicitud_Grupo::class,'solicitud','id');
        //dd($aux);
        return $aux;
    }

    public function relacion_admin() {
        return $this->hasOne(User::class,'id','admin');
    }
    public function relacion_gestion() {
        return $this->hasOne(Gestion::class,'id','gestion');
    }
    public function user(){
        return $this->hasOne('App\Models\User','id','usuario');
    }
}
