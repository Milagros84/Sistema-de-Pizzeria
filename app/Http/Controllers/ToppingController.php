<?php

namespace App\Http\Controllers;

use App\Models\Topping;
use Illuminate\Http\Request;

class ToppingController extends Controller
{

    //Listar
    public function index_GET() 
    {
        $topping=Topping::all();
        return view('toppings.index',compact('topping'));
    }

    //Registrar
    public function create_GET() {
      return view('toppings.create');
    }

    public function store_POST(Request $request) 
   {
       $topping=new Topping();

       $topping->descripcion=$request->descripcion;
       $topping->costo=$request->costo;

      $topping->save();
       return redirect('/toppings');
   }

    //Editar
    public function edit_GET($toppingId)
    {
       $topping=Topping::find($toppingId);
      return view('toppings.edit',compact('topping'));
    }

    public function update_PUT(Topping $topping,Request $request)
    {
       $topping->descripcion=$request->descripcion;
       $topping->costo=$request->costo;


        $topping->save();
        return redirect('/toppings');
    }


    //ELIMINAR 
    public function delete_GET($toppingId)
    {
        $topping=Topping::find($toppingId);
        return view('toppings.delete',compact('topping'));
    }

    public function destroy_DELETE(Topping $topping)
    {
        $topping->delete();
        return redirect('/toppings');
    }
}
