<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Producto_Model;
use Illuminate\Support\Facades\Redirect;

class Index_Controller extends Controller
{
    public function index()
    {
        $table_producto  = Producto_Model::all() ;
        return view('index',['table_producto'=>$table_producto]);
    }
}
