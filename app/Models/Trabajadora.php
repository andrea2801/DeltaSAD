<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajadora extends Model
{
    use HasFactory;
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
        return $this->hasMany(User::class);
    }
}
