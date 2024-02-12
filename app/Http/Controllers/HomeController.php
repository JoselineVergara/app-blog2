<?php

//esto significa donde se encuentra el archivo
namespace App\Http\Controllers;

use App\Models\files;
use App\Models\Restaurantes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //cuando usamos el metodo invoke es porque solo va administrar una unica ruta
    public function __invoke()
    {
        //pagina de inicio
        // $datos = Restaurantes::all();
        // // ddd($datos);
        // return view('paginaPrincipal', compact('datos'));
        // // $filesImagenes = files::all();

        // return view('paginaPrincipal', compact('filesImagenes'));
    }
}
