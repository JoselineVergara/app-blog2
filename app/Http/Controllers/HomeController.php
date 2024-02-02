<?php

//esto significa donde se encuentra el archivo
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //cuando usamos el metodo invoke es porque solo va administrar una unica ruta
    public function __invoke()
    {
        return view('Home'); 
    }
}
