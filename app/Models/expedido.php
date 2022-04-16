<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expedido extends Model
{
    use HasFactory;
    protected $table = 'expedidos';

    protected $fillable = [
        'lugar'
    ];
}
