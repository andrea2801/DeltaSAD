<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'nombre',
        'apellidos',
        'telefono',
        'dni',
        'password',
        'email',
        'img',
        'zona',
        'rol_id',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsTo(Role::class);
    }
    public function zona(){
        return $this->belongsTo(Zona::class);
    }
    public function usuario(){
        return $this->hasMany(Usuario::class);
    }
}
