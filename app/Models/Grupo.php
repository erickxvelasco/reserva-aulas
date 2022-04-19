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

}
