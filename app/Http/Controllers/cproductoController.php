<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\cProducto;

class cproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tableProductos  = cProducto::all();
        return view('cproductos.index', ["tableProductos" =>  $tableProductos ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cproductos.create',[ ]);
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
        $validatedData = $request->validate([
            'nombre' => 'required|min:10|max:100',
        ]);
 
         $mProducto = new cProducto($request->all());
        if($request->estatus){
            $mProducto->estatus = true; 
        } else {
            $mProducto->estatus = false;
        }

        $mProducto->save();

        // Regresa a lista de productos
        Session::flash('message', 'Tipo de calzado Creado!');
        return Redirect::to('cproductos');
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
        $modelo = cProducto::find($id);
        return view('cproductos.show', ["modelo" => $modelo]);
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
        $modelo = cProducto::find($id);
        return view('cproductos.edit', ["modelo"=> $modelo,]);
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
        $validatedData = $request->validate([
            'nombre' => 'required|min:10|max:100',
        ]);

        $mProducto = cProducto::find($id);
        $mProducto->fill($request->all());
        if($request->estatus){
            $mProducto->estatus = true; 
        } else {
            $mProducto->estatus = false;
        }

        $mProducto->save();

        Session::flash('message', 'Tipo de calzado actualizado!');
        return Redirect::to('cproductos');
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
        $mProducto = cProducto::find($id);
        $mProducto->delete();
        Session::flash('message', 'Tipo de calzado eliminado!');
        return Redirect::to('cproductos');
    }
}
