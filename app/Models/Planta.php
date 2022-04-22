<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    protected $table = 'plantas';
    use HasFactory;


    protected $fillable = [
        'planta',
        'ubicacion',
        'detalle'
    ];
    public function relacion_ubicacion() {
        return $this->hasOne(Ubicacion::class,'id','ubicacion');
    }

    public function relacion_aulas() {
        $aux=$this->hasmany(Aula::class,'planta','id');
        return $aux;
    }
}
