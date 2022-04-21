<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;
    protected $table = 'aulas';

    protected $fillable = [
        'nombre',
        'capacidad',
        'aulasgte',
        'planta',
        'detalle'
    ];
    public function relacion_planta() {
        return $this->hasOne(Planta::class,'id','planta');
    }
}
