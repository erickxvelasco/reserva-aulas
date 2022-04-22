<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;
    protected $table = 'ubicaciones';

    protected $fillable = [
        'ubicacion',
        'detalle'
    ];
    public function relacion_plantas() {
        $aux=$this->hasmany(Planta::class,'ubicacion','id');
        return $aux;
    }
}
