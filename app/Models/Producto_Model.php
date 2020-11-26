<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto_Model extends Model
{
    use HasFactory;
    #Tabla a la cual hará referencia
    protected $table    = 'producto';
    #Los campos que llenará de la tabla
    protected $fillable = ['nombre','descripcion','precio','stock','estatus','id_categoria'];
    #Referencia local como foráneo
    public function getCategoria()
    {
        return $this->belongsTo('App\Models\Categoria_Model','id_categoria','id','nombre','estatus');
    }
}
