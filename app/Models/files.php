<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class files extends Model
{
    public $table = 'restaurantes';
    protected $fillable = [ 'url_imagen' ]; 
}
