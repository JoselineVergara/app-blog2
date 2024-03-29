<?php

// use App\Http\Controllers\FileController;
use App\Http\Controllers\administrarAutenticacion;
use App\Http\Controllers\comentariosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RestaurantesController;
use App\Models\Comentarios;

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

Route::get('/',[RestaurantesController::class,'index'])->name('restaurantes.index');
Route::get('/crearlocales',[RestaurantesController::class,'create'])->name('restaurantes.create');
Route::post('/guardarlocales',[RestaurantesController::class,'store'])->name('restaurantes.store');
Route::get('/editarlocales/{id}',[RestaurantesController::class,'edit'])->name('restaurantes.edit');
Route::put('/actualizarlocales/{id}',[RestaurantesController::class,'update'])->name('restaurantes.update');

Route::get('/eliminar/{id}', [RestaurantesController::class,'show'])->name('restaurantes.show');
Route::delete('/destroy/{id}', [RestaurantesController::class,'destroy'])->name('restaurantes.destroy');


// Route::view('/pageExperience',"pageExperience")->name('experiencia');
Route::get('/experiencia/{id}',[comentariosController::class,'index'])->name('experiencia.index');
Route::post('/guardarcomentario/{id}',[comentariosController::class,'store'])->name('experiencia.store');

Route::view('/login',"login")->name('login');
Route::view('/registro',"register")->name('registro');
// Route::view('/privada',"secret")->name('privada');
Route::post('/validar-registro',[administrarAutenticacion::class,'register'])->name('validar-Registro');
Route::post('/inicia-sesion',[administrarAutenticacion::class,'login'])->name('inicia-sesion');
Route::post('/logout',[administrarAutenticacion::class,'logout'])->name('logout');
