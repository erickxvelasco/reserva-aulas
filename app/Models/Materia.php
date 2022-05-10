<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $table = 'materias';

    protected $fillable = [
        'descripcion',
        'departamento'
    ];
    public function relacion_grupo()
    {
        $aux = $this->hasMany(Grupo::class, 'materia', 'id');
        return $aux;
    }
}
