<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    public $table = 'comentarios';
    use HasFactory;

    public function restaurantes(){
        return $this->belongsTo(Restaurantes::class,'id_restaurante	');
    }
}
