<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topping extends Model
{
    use HasFactory;

    protected $table="toppings";

    protected $primaryKey="id";

   public function pedidos(){
       return $this->hasMany("App\Models\Pedido");
    }

    public $timestamps=true;
}
