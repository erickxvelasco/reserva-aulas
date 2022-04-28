<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud_Aula extends Model
{
    use HasFactory;
    protected $table = 'solicitud_aulas';
    use HasFactory;


    protected $fillable = [
        'solicitud',
        'aula'
    ];
}
