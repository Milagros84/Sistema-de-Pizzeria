<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Pizza;
use App\Models\Tamaño;
use App\Models\Topping;
use Illuminate\Http\Request;

class PedidoControler extends Controller
{

    //Listar
    public function index_GET() 
    {
        $pedido=Pedido::all();
        return view('pedidos.index',compact('pedido'));
    }

    //Registrar
    public function create_GET() {

        $pedido=Pizza::all();
        $tamaño=Tamaño::all();
        $topping=Topping::all();

      return view('pedidos.create',compact('pedido','tamaño','topping'));
    }

    public function store_POST(Request $request) 
   {
       
       $pedido=new Pedido();

       $pedido->cliente=$request->cliente;
       $pedido->id_pizza=$request->id_pizza;
       $pedido->id_tamaño=$request->id_tamaño;
       $pedido->id_topping=$request->id_topping;

      $pedido->save();
       return redirect('/pedidos');
   }

    //Editar
    public function edit_GET($pedidoId)
    {
       $pedido=Pedido::find($pedidoId);
       $tamaño=Tamaño::all();
      return view('pedidos.edit',compact('pedido','tamaño'));
    }

    public function update_PUT(Pedido $pedido,Request $request)
    {
        $pedido->cliente=$request->cliente;
        $pedido->id_pizza=$request->id_pizza;
        $pedido->id_tamaño=$request->id_tamaño;
        $pedido->id_topping=$request->id_topping;


        $pedido->save();
        return redirect('/pedidos');
    }


    //ELIMINAR 
    public function delete_GET($pedidoId)
    {
        $pedido=Pedido::find($pedidoId);
        return view('pedidos.delete',compact('pedido'));
    }

    public function destroy_DELETE(Pedido $pedido)
    {
        $pedido->delete();
        return redirect('/pedidos');
    }
}
