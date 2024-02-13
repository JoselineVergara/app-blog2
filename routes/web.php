<?php

// use App\Http\Controllers\FileController;
use App\Http\Controllers\administrarAutenticacion;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RestaurantesController;

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
// Route::get('/', HomeController::class);

//Route::resource('crearlocales','FileController');
// Route::resource('crearlocales',FileController::class);

Route::get('/',[RestaurantesController::class,'index'])->name('restaurantes.index');
Route::get('/crearlocales',[RestaurantesController::class,'create'])->name('restaurantes.create');
Route::post('/guardarlocales',[RestaurantesController::class,'store'])->name('restaurantes.store');
Route::get('/editarlocales/{id}',[RestaurantesController::class,'edit'])->name('restaurantes.edit');
Route::put('/actualizarlocales/{id}',[RestaurantesController::class,'update'])->name('restaurantes.update');
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

// // });
// =======
// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/login',"login")->name('login');
Route::view('/registro',"register")->name('registro');
Route::view('/privada',"secret")->name('privada');

Route::view('/pageExperience',"pageExperience")->name('experiencia');

Route::post('/validar-registro',[administrarAutenticacion::class,'register'])->name('validar-Registro');
Route::post('/inicia-sesion',[administrarAutenticacion::class,'login'])->name('inicia-sesion');
Route::post('/logout',[administrarAutenticacion::class,'logout'])->name('logout');
