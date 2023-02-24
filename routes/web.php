<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoControler;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\TamañoController;
use App\Http\Controllers\ToppingController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//INDEX 

Route ::get('/index',[HomeController::class,"inde_Get"]);


//Pizza
//Listar
Route ::get('/pizzas',[PizzaController::class,"index_Get"]);

//Registrar
Route::get('/pizzas/create',[PizzaController::class,"create_GET"]);
Route::post('/pizzas',[PizzaController::class,'store_POST'])->name('pizzas.store');

//EDITAR
Route::get('/pizzas/{pizzaId}/edit',[PizzaController::class,'edit_GET'])->name('pizzas.edit');
Route::put('/pizzas/{pizza}',[PizzaController::class,'update_PUT'])->name('pizzas.update');

//Eliminar
Route::get('/pizzas/{pizzaId}/delete',[PizzaController::class,'delete_GET'])->name('pizzas.delete');
Route::delete('/pizzas/{pizza}',[PizzaController::class,'destroy_DELETE'])->name('pizzas.destroy');



//Tamaño
//Listar
Route ::get('/tamaños',[TamañoController::class,"index_Get"]);

//Registrar
Route::get('/tamaños/registrar',[TamañoController::class,"create_GET"]);
Route::post('/tamaños',[TamañoController::class,'store_POST'])->name('tamaños.store');

//EDITAR
Route::get('/tamaños/{tamañoId}/edit',[TamañoController::class,'edit_GET'])->name('tamaños.edit');
Route::put('/tamaños/{tamaño}',[TamañoController::class,'update_PUT'])->name('tamaños.update');


//Eliminar
Route::get('/tamaños/{tamañoId}/delete',[TamañoController::class,'delete_GET'])->name('tamaños.delete');
Route::delete('/tamaños/{tamaño}',[TamañoController::class,'destroy_DELETE'])->name('tamaños.destroy');


//Topping

//Listar
Route ::get('/toppings',[ToppingController::class,"index_Get"]);

//Registrar
Route::get('/toppings/registrar',[ToppingController::class,"create_GET"]);
Route::post('/toppings',[ToppingController::class,'store_POST'])->name('topping.store');

//EDITAR
Route::get('/toppings/{toppingId}/edit',[ToppingController::class,'edit_GET'])->name('toppings.edit');
Route::put('/toppings/{topping}',[ToppingController::class,'update_PUT'])->name('toppings.update');

Route::get('/toppings/{toppingId}/delete',[ToppingController::class,'delete_GET'])->name('toppings.delete');
Route::delete('/toppings/{topping}',[ToppingController::class,'destroy_DELETE'])->name('toppings.destroy');


//Topping

//Listar
Route ::get('/pedidos',[PedidoControler::class,"index_Get"]);

//Registrar
Route::get('/pedidos/registrar',[PedidoControler::class,"create_GET"]);
Route::post('/pedidos',[PedidoControler::class,'store_POST'])->name('pedidos.store');

//EDITAR
Route::get('/pedidos/{pedidoId}/edit',[PedidoControler::class,'edit_GET'])->name('pedidos.edit');
Route::put('/pedidos/{pedido}',[PedidoControler::class,'update_PUT'])->name('pedidos.update');

Route::get('/pedidos/{pedidoId}/delete',[PedidoControler::class,'delete_GET'])->name('pedidos.delete');
Route::delete('/pedidos/{pedido}',[PedidoControler::class,'destroy_DELETE'])->name('pedidos.destroy');