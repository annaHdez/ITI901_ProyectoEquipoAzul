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
        return view('Cliente_Producto.index',['table_productos'=>$table_productos,"table_categoria"=>$table_categoria,"filtro_producto"=>$request->producto_buscar,"filtro_categoria"=>$request->categoria_buscar,"table_limit_productos"=>$table_limit_productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
