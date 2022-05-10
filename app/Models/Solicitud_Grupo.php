<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud_Grupo extends Model
{
    use HasFactory;
    protected $table = 'solicitud_grupos';
    use HasFactory;


    protected $fillable = [
        'solicitud',
        'grupo'
    ];
    public function solicitud()
    {
        $aux = $this->hasMany(Solicitud::class, 'id', 'solicitud');
        return $aux;
    }
    public function relacion_grupo(){
        return $this->hasOne(Grupo::class,'id','grupo');
    }
}
