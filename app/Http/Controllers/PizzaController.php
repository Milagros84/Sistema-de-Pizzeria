<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\Tamaño;
use Illuminate\Http\Request;

class PizzaController extends Controller
{



    //Listar
    public function index_GET() 
    {
        $pizzeria=Pizza::all();
        return view('pizzas.index',compact('pizzeria'));
    }

    //Registrar
    public function create_GET() {

      $tamaño=Tamaño::all();

      return view('pizzas.create',compact('tamaño'));
    }

    public function store_POST(Request $request) 
   {
     $pizza=new Pizza();

      dd($request->hasFile('featured'));

       $pizza->nombre=$request->nombre;
       $pizza->id_tamaño=$request->id_tamaño;

      $pizza->save();
       return redirect('/pizzas');
   }

    //Editar
    public function edit_GET($pizzaId)
    {
       $pizza=Pizza::find($pizzaId);
      return view('pizzas.edit',compact('pizza'));
    }

    public function update_PUT(Pizza $pizza,Request $request)
    {
       $pizza->nombre=$request->nombre;
       $pizza->id_tamaño=$request->id_tamaño;

        $pizza->save();
        return redirect('/pizzas');
    }


    //ELIMINAR 
    public function delete_GET($pizzaId)
    {
        $pizza=Pizza::find($pizzaId);
        return view('pizzas.delete',compact('pizza'));
    }

    public function destroy_DELETE(Pizza $pizza)
    {
        $pizza->delete();
        return redirect('/pizzas');
    }
}
