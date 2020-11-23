<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\cProducto;
use Session;
use Redirect;

class ProductoContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tableProductos = Producto::all();
        return view('productos.index', [ "tableProductos" => $tableProductos ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tablecProductos = cProducto::orderBy('nombre')->get()->pluck('nombre','id');
        return view('productos.create',[ 'tablecProductos' => $tablecProductos ]);
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
            'nombre' => 'required|min:5|max:100',
            'descripcion' => 'required|min:5|max:200',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:0',
            'cproducto_id' => 'required|exists:cproducto,id'
        ]);
 
        $mProducto = new Producto($request->all());
        if($request->activo){
            $mProducto->activo = true; 
        } else {
            $mProducto->activo = false;
        }

        $mProducto->save();

        $file = $request->file('imagen');
        
        if($file){
            $imgNombreVirtual = $file->getClientOriginalName();
            $imgNombreFisico = $mProducto->id.'-'.$imgNombreVirtual;
            \Storage::disk('local')->put($imgNombreFisico, \File::get($file));
            $mProducto->imgNombreVirtual = $imgNombreVirtual;
            $mProducto->imgNombreFisico = $imgNombreFisico;
            $mProducto->save();
        }
        // Regresa a lista de productos
        Session::flash('message', 'Producto creado!');
        return Redirect::to('productos');

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
        $modelo = Producto::find($id);
        return view('productos.show', ["modelo" => $modelo] );

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
        $modelo = Producto::find($id);
        $tablecProductos = cProducto::orderBy('nombre')->get()->pluck('nombre','id');
        return view('productos.edit', ["modelo" => $modelo, "tablecProductos"=>$tablecProductos]);
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
            'nombre' => 'required|min:5|max:100',
            'descripcion' => 'required|min:5|max:200',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:0',
            'cproducto_id' => 'required|exists:cproducto,id'
        ]);

        $mProducto = Producto::find($id);
        $mProducto->fill($request->all());
        if($request->activo){
            $mProducto->activo = true; 
        } else {
            $mProducto->activo = false;
        }

        $mProducto->save();

        Session::flash('message', 'Producto actualizado!');
        return Redirect::to('productos');
        
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
        $mProducto = Producto::find($id);
        $mProducto->delete();
        Session::flash('message', 'Producto eliminado!');
        return Redirect::to('productos');
    }
}
