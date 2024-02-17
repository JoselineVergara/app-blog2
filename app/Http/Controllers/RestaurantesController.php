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
        // $datos=Restaurantes::all();
        $datos=Restaurantes::orderBy('id','desc')->paginate(6);
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
        if($request->hasFile('img')){
            $file= $request->file('img');
            $destino = 'imagenes/';
            $fileName = time() . '-' . $file->getClientOriginalName();
            $upload = $request->file('img')->move($destino,$fileName);
            $restaurantes->img = $destino.$fileName;
        }

        $restaurantes->nombre = $request->post('nombre');
        $restaurantes->ubicacion = $request->post('ubicacion');
        $restaurantes->descripcion = $request->post('descripcion');
        $restaurantes->horarioatencion = $request->post('horarioatencion');
        $restaurantes->categoria = $request->post('categoria');
        // $restaurantes->img = $request->post('img');

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

        $restaurante = Restaurantes::find($id);
        return view('editarLocal',compact('restaurante'));
        // echo $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //este metodo actualiza los datos en la bd

        $restaurante = Restaurantes::find($id);
        $restaurante->nombre = $request->post('nombre');
        $restaurante->ubicacion = $request->post('ubicacion');
        $restaurante->descripcion = $request->post('descripcion');
        $restaurante->horarioatencion = $request->post('horarioatencion');
        $restaurante->categoria = $request->post('categoria');
        $restaurante->save();

        return redirect()->route('restaurantes.index')->with("success","Actualizado con exito");

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
