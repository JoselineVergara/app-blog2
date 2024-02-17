<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurantes extends Model
{
    public $table = 'tablarestaurantes';
    use HasFactory;

    public function comentarios(){
        return $this->hasMany(Comentarios::class,'id');
    }
}

