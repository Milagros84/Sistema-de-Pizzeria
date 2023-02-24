<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table="pedidos";

    protected $primaryKey="id";

    public function pizzas(){
        return $this->belongsTo(Pizza::class,'id_pizza');
    }

    public function tamaños(){
        return $this->belongsTo(Tamaño::class,'id_tamaño');
    }

    public function toppings(){
        return $this->belongsTo(Topping::class,'id_topping');
    }

    public $timestamps=true;
}
