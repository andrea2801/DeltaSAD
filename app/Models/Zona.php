<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    use HasFactory;
    protected $fillable = [
        'zonas',
    ];

    public function trabajadora(){
        return $this->hasMany(Trabajadora::class);
    }
    public function usuario(){
        return $this->hasMany(User::class);
    }
}
