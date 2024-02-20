<?php

namespace App\Http\Controllers;

use App\Models\Restaurantes;
use App\Models\Comentarios;
use Illuminate\Http\Request;

class comentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // Obtener todos los comentarios del restaurante con el ID especificado
        $r = Restaurantes::find($id);
        $c = Comentarios::where('id_restaurante', $id)->get();
        // $c = Comentarios::all();
        return view('pageExperience', compact('c','r'));
    }
    public function store(Request $request, $id)
    {
        //se usa para guardar los datos en la bd
        $c = new Comentarios();
        $c->usuario = $request->post('usuario');
        $c->id_restaurante = $id;
        $c->comentario = $request->post('comentario');
        $c->una_estrella = 1;
        $c->dos_estrellas = 1;
        $c->tres_estrellas = 1;
        $c->cuatro_estrellas = 1;
        $c->cinco_estrellas = 1;

        $c->save();
        // Se redirecciona a la página de experiencia con un mensaje de éxito.
        return redirect()->route('experiencia.index', $id)->with('success', 'Comentario agregado exitosamente.');
        // return redirect()->route('experiencia.index',$id)->with("success","Agregado con exito");
    }
}
