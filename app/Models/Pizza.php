<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    protected $table="pizzas";

    protected $primaryKey="id";

    public function tamaños(){
        return $this->belongsTo(Tamaño::class,'id_tamaño');
    }

    public function pedidos(){
        return $this->hasMany("App\Models\Pedido");
     }

    public $timestamps=true;
}
