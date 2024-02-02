<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Asig genero el enlace del controlador y la ruta para tener la logica en el controlador
Route::get('/', HomeController::class);

// Route::get('blog');

//Cuando el ususario ingrese al archivo principal le muestre la vista welcome 
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('blog',function(){
//     return "Bienvenido al login";
// });
// Route::get('blog/create',function(){
//     return "Bienvenido al blog create: ";
// });
// Route::get('blog/{usuario}',function($nombre){
//     return "Bienvenido al login: ".$nombre;
// });
//cuando tenemos muchas rutas y queremos hacer una solo podemos hacer que las variables sean opcionales con ? luego en la funcion inicializamos la variable como null
// Route::get('blog/{usuario}/{contra?}',function($nombre,$contra = null){
//     if($contra != null){
//         return "Bienvenido al login: ".$nombre." con la contra: ".$contra;
//     }else{
//         return "Bienvenido al login: ".$nombre;
//     }
    
// });
