<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForCustomer_DetalleVenta_Model extends Model
{
    use HasFactory;
    protected $table = 'detalleVentas';
    public function getProducto()
    {
        return $this->belongsTo('App\Models\Producto_Model','producto_id','id','nombre');
    }
}
