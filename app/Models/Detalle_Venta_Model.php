<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Venta_Model extends Model
{
    use HasFactory;
    protected $table = 'detalleVentas';
    
    public function getProducto()
    {
        return $this->belongsTo('App\Models\Producto_Model','producto_id','id','nombre');
    }
    public function getUser()
    {
        return $this->belongsTo('App\Models\UserEloquent','user_id','id','name');
    }
}
