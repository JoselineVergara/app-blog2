<?php

namespace App\Http\Controllers;

use App\Models\Restaurantes;
use Illuminate\Http\Request;

class RestaurantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //pagina de inicio
        $datos=Restaurantes::all();
        return view('paginaPrincipal', compact('datos'));
        //return view('crearLocal');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //formulario donde nosotros agregamos datos

        return view('crearLocal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //se usa para guardar los datos en la bd
        $restaurantes = new Restaurantes();
        $restaurantes->nombre = $request->post('nombre');
        $restaurantes->ubicacion = $request->post('ubicacion');
        $restaurantes->descripcion = $request->post('descripcion');
        $restaurantes->horarioatencion = $request->post('horarioatencion');
        $restaurantes->categoria = $request->post('categoria');
        $restaurantes->img = $request->post('img');

        $restaurantes->save();

        return redirect()->route('restaurantes.index')->with("success","Agregado con exito");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurantes $restaurantes)
    {
        //servira para obtener un registro de nuestra tabla
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //sirve para traer los datos que se van a editar y colocar en el formulario
        return view('editarLocal');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurantes $restaurantes)
    {
        //este metodo actualiza los datos en la bd
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurantes $restaurantes)
    {
        //elimina el registro
    }
}
