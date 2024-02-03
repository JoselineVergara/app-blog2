<?php

//esto significa donde se encuentra el archivo
namespace App\Http\Controllers;
use App\Models\files;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //cuando usamos el metodo invoke es porque solo va administrar una unica ruta
    public function __invoke()
    {
        $filesImagenes = files::all();

        return view('Home',compact('filesImagenes')); 
    }
}
