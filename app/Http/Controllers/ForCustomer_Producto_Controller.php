<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto_Model;
use App\Models\Categoria_Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ForCustomer_Producto_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        $table_productos = DB::table('producto')
        ->join('categoria','producto.id_categoria','=','categoria.id')
        ->select('producto.*','categoria.nombre as categoria_producto')
        ->get();
        $table_categoria = Categoria_Model::orderBy('nombre')->get()->pluck('nombre','id');
        $whereClause     = [];
        $where           = [];
        if($request->producto_buscar)
        {
            array_push($whereClause, [ "nombre" ,'like', '%'.$request->producto_buscar.'%' ]);
        }
        if($request->categoria_buscar)
        {
            array_push($where,["SELECT * FROM producto INNER JOIN categoria ON producto.id_categoria=categoria.id WHERE categoria.nombre LIKE '%".$request->categoria_buscar."%';"]);
        }
        $table_productos       = Producto_Model::orderBy('nombre')->where($whereClause)->get();
        $table_limit_productos = Producto_Model::orderBy('nombre')->skip(1)->take(2)->get();
        $carrito = array([
            'idProducto' => '',
            'hoy'        => '',
            'nombre'     => '',
            'precio'     => '',
            'cantidad'   => '',
            'subtotal'   => ''
        ]);
        $idProducto       = intval(0); 
        $subtotal_carrito = doubleval(0.00);
        $iva_carrito      = doubleval(0.00);
        $total_carrito    = doubleval(0.00);
        return view('Cliente_Producto.index',['table_productos'=>$table_productos,"table_categoria"=>$table_categoria,"filtro_producto"=>$request->producto_buscar,"filtro_categoria"=>$request->categoria_buscar,"table_limit_productos"=>$table_limit_productos,'carrito'=>$carrito,'subtotal_carrito'=>$subtotal_carrito,'iva_carrito'=>$iva_carrito,'total_carrito'=>$total_carrito,'idProducto_carrito'=>$idProducto]);
    }

    public function agregarCarrito(Request $request) 
    {
        $dia  = date("d");
        $mes  = date("m");
        $anio = date("Y");
        $hora = date("H");
        $min  = date("i");
        $seg  = date("s");
        $hoy  = $anio.":".$mes.":".$dia." ".$hora.":".$min.":".$seg;
        $carrito = $request->session()->get('carrito');
        if(!$carrito){
            $carrito = array([
                'idProducto' => '',
                'hoy'        => '',
                'nombre'     => '',
                'precio'     => '',
                'cantidad'   => '',
                'subtotal'   => ''
            ]);
            $idProducto = intval(0); 
            $subtotal_carrito = doubleval(0.00);
            $iva_carrito      = doubleval(0.00);
            $total_carrito    = doubleval(0.00);
        }
        else
        {
            $idProducto = intval($request->idProducto);
            $nombre     = strval($request->nombre);
            $precio     = doubleval($request->precio);
            $cantidad   = intval($request->cantidad);
            $subtotal   = intval($request->cantidad)*doubleval($request->precio);
            array_push($carrito,[
                'idProducto' => $idProducto,
                'hoy'        => $hoy,
                'nombre'     => strval($nombre),
                'precio'     => doubleval($precio),
                'cantidad'   => intval($cantidad),
                'subtotal'   => doubleval($subtotal)
            ]);
            $subtotal_carrito    = doubleval($subtotal);
            $iva_carrito         = doubleval($subtotal * 0.16);
            $total_carrito       = doubleval($subtotal * 1.16);
        }
        $request->session()->put('carrito', $carrito);
        $table_productos = DB::table('producto')
        ->join('categoria','producto.id_categoria','=','categoria.id')
        ->select('producto.*','categoria.nombre as categoria_producto')
        ->get();

        $table_categoria = Categoria_Model::orderBy('nombre')->get()->pluck('nombre','id');
        $whereClause     = [];
        $where           = [];
        if($request->producto_buscar)
        {
            array_push($whereClause, [ "nombre" ,'like', '%'.$request->producto_buscar.'%' ]);
        }
        if($request->categoria_buscar)
        {
            array_push($where,["SELECT * FROM producto INNER JOIN categoria ON producto.id_categoria=categoria.id WHERE categoria.nombre LIKE '%".$request->categoria_buscar."%';"]);
        }
        $table_productos       = Producto_Model::orderBy('nombre')->where($whereClause)->get();
        $table_limit_productos = Producto_Model::orderBy('nombre')->skip(1)->take(2)->get();
        //echo var_dump($carrito);
        return view('Cliente_Pedido.index',['table_productos'=>$table_productos,"table_categoria"=>$table_categoria,"filtro_producto"=>$request->producto_buscar,"filtro_categoria"=>$request->categoria_buscar,"table_limit_productos"=>$table_limit_productos,'carrito'=>$carrito,'subtotal_carrito'=>$subtotal_carrito,'iva_carrito'=>$iva_carrito,'total_carrito'=>$total_carrito,'idProducto_carrito'=>$idProducto]);
        //return Redirect::to('Cliente_Producto');
    }
    public function verCarrito(Request $request)
    {
        $dia  = date("d");
        $mes  = date("m");
        $anio = date("Y");
        $hora = date("H");
        $min  = date("i");
        $seg  = date("s");
        $hoy  = $anio.":".$mes.":".$dia." ".$hora.":".$min.":".$seg;
        $carrito = $request->session()->get('carrito');
        if($carrito==NULL)
        {
            $carrito = array([
                'idProducto' => '',
                'hoy'        => '',
                'nombre'     => '',
                'precio'     => '',
                'cantidad'   => '',
                'subtotal'   => ''
            ]);
            $idProducto       = intval(0); 
            $subtotal_carrito = doubleval(0.00);
            $iva_carrito      = doubleval(0.00);
            $total_carrito    = doubleval(0.00);
        }
        else
        {
            $idProducto = intval($request->idProducto);
            $nombre     = strval($request->nombre);
            $precio     = doubleval($request->precio);
            $cantidad   = intval($request->cantidad);
            $subtotal = intval($request->cantidad)*doubleval($request->precio);
            $carrito = array([
                'idProducto' => $idProducto,
                'hoy'        => $hoy,
                'nombre'     => strval($nombre),
                'precio'     => doubleval($precio),
                'cantidad'   => intval($cantidad),
                'subtotal'   => doubleval($subtotal)
                            ]);
            
            $subtotal_carrito = doubleval($subtotal);
            $iva_carrito      = doubleval($subtotal * 0.16);
            $total_carrito    = doubleval($subtotal * 1.16);
        }
        
        $request->session()->put('carrito', $carrito);
        //var_dump($carrito);
        return view('Cliente_Pedido.index',['carrito'=>$carrito,'request'=>$request,'subtotal_carrito'=>$subtotal_carrito,'iva_carrito'=>$iva_carrito,'total_carrito'=>$total_carrito,'idProducto_carrito'=>$idProducto]);
    }
    public function confirmarPedido(Request $request)
    {
        $dia  = date("d");
        $mes  = date("m");
        $anio = date("Y");
        $hora = date("H");
        $min  = date("i");
        $seg  = date("s");
        $hoy  = $anio.":".$mes.":".$dia." ".$hora.":".$min.":".$seg;
        $carrito = $request->session()->get('carrito');
        if($carrito==NULL)
        {
            $carrito = array([
                'idProducto' => '',
                'hoy'        => '',
                'nombre'     => '',
                'precio'     => '',
                'cantidad'   => '',
                'subtotal'   => ''
            ]);
            $idProducto       = intval(0); 
            $subtotal_carrito = doubleval(0.00);
            $iva_carrito      = doubleval(0.00);
            $total_carrito    = doubleval(0.00);
        }
        else
        {
            $idProducto = intval($request->idProducto);
            $nombre     = strval($request->nombre);
            $precio     = doubleval($request->precio);
            $cantidad   = intval($request->cantidad);
            $subtotal   = intval($request->cantidad)*doubleval($request->precio);

            $carrito = array([
                'idProducto' => $idProducto,
                'hoy'        => $hoy,
                'nombre'     => strval($nombre),
                'precio'     => doubleval($precio),
                'cantidad'   => intval($cantidad),
                'subtotal'   => doubleval($subtotal)
            ]);
            $subtotal_carrito = doubleval($subtotal);
            $iva_carrito      = doubleval($subtotal * 0.16);
            $total_carrito    = doubleval($subtotal * 1.16);
        }
        
        $request->session()->put('carrito', $carrito);
        return view('home',['subtotal_carrito'=>$subtotal_carrito,'iva_carrito'=>$iva_carrito,'total_carrito'=>$total_carrito,'idProducto_carrito'=>$idProducto]);
    }
    public function vaciarCarrito(Request $request)
    {
        $carrito = $request->session()->get('carrito');
        //unset($carrito['idProducto'],$carrito['hoy'],$carrito['nombre'],$carrito['precio'],$carrito['cantidad']);
        $carrito = array([
            'idProducto' => '',
            'hoy'        => '',
            'nombre'     => '',
            'precio'     => '',
            'cantidad'   => '',
            'subtotal'   => ''
        ]);
        $idProducto       = intval(0); 
        $subtotal_carrito = doubleval(0.00);
        $iva_carrito      = doubleval(0.00);
        $total_carrito    = doubleval(0.00);
        //echo var_dump($carrito);
        return view('Cliente_Pedido.index',['carrito'=>$carrito,'request'=>$request,'subtotal_carrito'=>$subtotal_carrito,'iva_carrito'=>$iva_carrito,'total_carrito'=>$total_carrito,'idProducto_carrito'=>$idProducto]);
    }
    public function quitarElemento(Request $request,$id)
    {   
        $carrito          = $request->session()->get('carrito');
        $producto         = Producto_Model::find($id);
        $request->session()->put('carrito', $carrito);
        $carrito          = $request->session()->remove($producto);
        $request->session()->put('carrito', $carrito);
        $idProducto       = intval(0); 
        return view('Cliente_Pedido.index',['carrito'=>$carrito,'request'=>$request,'idProducto_carrito'=>$idProducto]);
    }
    public function seguirComprando(Request $request)
    {
        $dia  = date("d");
        $mes  = date("m");
        $anio = date("Y");
        $hora = date("H");
        $min  = date("i");
        $seg  = date("s");
        $hoy  = $anio.":".$mes.":".$dia." ".$hora.":".$min.":".$seg;
        $carrito = $request->session()->get('carrito');
        if($carrito==NULL)
        {
            $carrito = array([
                'idProducto' => '',
                'hoy'        => '',
                'nombre'     => '',
                'precio'     => '',
                'cantidad'   => '',
                'subtotal'   => ''
            ]);
            $idProducto       = intval(0); 
            $subtotal_carrito = doubleval(0.00);
            $iva_carrito      = doubleval(0.00);
            $total_carrito    = doubleval(0.00);
        }
        else
        {
            $idProducto = intval($request->idProducto);
            $nombre     = strval($request->nombre);
            $precio     = doubleval($request->precio);
            $cantidad   = intval($request->cantidad);
            $subtotal   = intval($request->cantidad)*doubleval($request->precio);
            $subtotal = intval($request->cantidad)*doubleval($request->precio);
            $carrito = array([
                'idProducto' => $idProducto,
                'hoy'        => $hoy,
                'nombre'     => strval($nombre),
                'precio'     => doubleval($precio),
                'cantidad'   => intval($cantidad),
                'subtotal'   => doubleval($subtotal)
            ]);
            $subtotal_carrito = doubleval($subtotal);
            $iva_carrito      = doubleval($subtotal * 0.16);
            $total_carrito    = doubleval($subtotal * 1.16);
        }
        $request->session()->put('carrito', $carrito);
        $table_productos = DB::table('producto')
        ->join('categoria','producto.id_categoria','=','categoria.id')
        ->select('producto.*','categoria.nombre as categoria_producto')
        ->get();
        $table_categoria = Categoria_Model::orderBy('nombre')->get()->pluck('nombre','id');
        $whereClause     = [];
        $where           = [];
        if($request->producto_buscar)
        {
            array_push($whereClause, [ "nombre" ,'like', '%'.$request->producto_buscar.'%' ]);
        }
        if($request->categoria_buscar)
        {
            array_push($where,["SELECT * FROM producto INNER JOIN categoria ON producto.id_categoria=categoria.id WHERE categoria.nombre LIKE '%".$request->categoria_buscar."%';"]);
        }
        $table_productos       = Producto_Model::orderBy('nombre')->where($whereClause)->get();
        $table_limit_productos = Producto_Model::orderBy('nombre')->skip(1)->take(2)->get();
        //echo var_dump($carrito);
        return view('Cliente_Producto.index',['table_productos'=>$table_productos,"table_categoria"=>$table_categoria,"filtro_producto"=>$request->producto_buscar,"filtro_categoria"=>$request->categoria_buscar,"table_limit_productos"=>$table_limit_productos,'carrito'=>$carrito,'subtotal_carrito'=>$subtotal_carrito,'iva_carrito'=>$iva_carrito,'total_carrito'=>$total_carrito,'idProducto_carrito'=>$idProducto]);
        //return Redirect::to('Cliente_Producto');
    }

}
