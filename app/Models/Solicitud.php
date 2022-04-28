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
        'final'
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
}
