<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $table = 'grupos';

    protected $fillable = [
        'grupo',
        'materia',
        'usuario',
        'inscritos'
    ];

    public function relacion_materia() {
        return $this->hasOne(Materia::class,'id','materia');
    }
    public function relacion_grupo(){
        return $this->hasMany(Solicitud_Grupo::class,'id','materia');
    }
    public function relacion_usuario() {
        return $this->hasMany(User::class,'id','usuario');
    }

}
