<?php

namespace App\Http\Controllers;

use App\Models\Tamaño;
use Illuminate\Http\Request;

class TamañoController extends Controller
{

    //Listar
    public function index_GET() 
    {
        $tamaño=Tamaño::all();
        return view('tamaños.index',compact('tamaño'));
    }

    //Registrar
    public function create_GET() {
      return view('tamaños.create');
    }

    public function store_POST(Request $request) 
   {
       $tamaño=new Tamaño();

       $tamaño->descripcion=$request->descripcion;
       $tamaño->costo=$request->costo;

      $tamaño->save();
       return redirect('/tamaños');
   }

    //Editar
    public function edit_GET($tamañoId)
    {
       $tamaño=Tamaño::find($tamañoId);
      return view('tamaños.edit',compact('tamaño'));
    }

    public function update_PUT(Tamaño $tamaño,Request $request)
    {
       $tamaño->descripcion=$request->descripcion;
       $tamaño->costo=$request->costo;

        $tamaño->save();
        return redirect('/tamaños');
    }


    //ELIMINAR 
    public function delete_GET($tamañoId)
    {
        $tamaño=Tamaño::find($tamañoId);
        return view('tamaños.delete',compact('tamaño'));
    }

    public function destroy_DELETE(Tamaño $tamaño)
    {
        $tamaño->delete();
        return redirect('/tamaños');
    }
}
