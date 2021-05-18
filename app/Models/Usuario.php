<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dni',
        'password',
    ];

    public function zona(){
        return $this->belongsTo(Zona::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
