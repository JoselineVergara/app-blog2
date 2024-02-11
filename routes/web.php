<?php

use App\Http\Controllers\administrarAutenticacion;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login',"login")->name('login');
Route::view('/registro',"register")->name('registro');
Route::view('/privada',"secret")->name('privada');

Route::view('/pageExperience',"pageExperience")->name('experiencia');

Route::post('/validar-registro',[administrarAutenticacion::class,'register'])->name('validar-Registro');
Route::post('/inicia-sesion',[administrarAutenticacion::class,'login'])->name('inicia-sesion');
Route::post('/logout',[administrarAutenticacion::class,'logout'])->name('logout');

