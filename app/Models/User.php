<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $table = 'users';

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'apellidos',
        'nombres',
        'ci',
        'expedido',
        'domicilio',
        'celular',
        'cargo',
        'tipo',
        'estado',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function relacion_expedido()
    {
        return $this->hasOne(Expedido::class, 'id', 'expedido');
    }

    public function relacion_cargo()
    {
        return $this->hasOne(Cargo::class, 'id', 'cargo');
    }

    public function relacion_grupos()
    {
        $aux = $this->hasmany(Grupo::class, 'usuario', 'id');
        return $aux;
    }
    public function solicitud()
    {
        $aux = $this->hasMany(Solicitud::class, 'id', 'usuario');
        return $aux;
    }
}
