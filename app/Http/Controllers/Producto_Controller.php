<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto_Model;
use App\Models\Categoria_Model;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Redirect;

class Producto_Controller extends Controller
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
        $modelo_producto = Producto_Model::all();
        $table_categoria = Categoria_Model::orderBy('nombre')->get()->pluck('nombre','id');
        $whereClause     = [];
        if($request->nombre)
        {
            array_push($whereClause, [ "name" ,'like', '%'.$request->nombre.'%' ]);
        }
        $table_productos       = Producto_Model::orderBy('nombre')->where($whereClause)->get();
        $table_limit_productos = Producto_Model::orderBy('nombre')->skip(1)->take(2)->get();

        return view('Productos.index',['table_productos'=>$table_productos,"table_categoria"=>$table_categoria,"modelo_producto"=>$modelo_producto,"filtro_producto"=>$request->nombre,"table_limit_productos"=>$table_limit_productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table_productos = Categoria_Model::orderBy('nombre')->get()->pluck('nombre','id');
        return view('Productos.index#Crear_Producto',['table_productos'=>$table_productos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre'              => 'required|min:5|max:30',
            'descripcion'         => 'requiered|min:5',
            'precio'              => 'required|step:0.01|min:0|max:1000',
            'stock'               => 'required|step:1|min:0',

            //'numeros_disponibles' => 'required|min:1',
            //'color'               => 'required|min:1',
        ]);

        $modelo = new Producto_Model($request->all());
        if($request->estatus)
        {
            $modelo->estatus = true;
        }
        else
        {
            $modelo->estatus = false;
        }
        $modelo->save();
         //Almacena la imagen en ruta ftp
        $file = $request->file('imagen');
        if($file)
        {
            $imgNombreVirtual = $file->getClientOriginalName();
            $imgNombreFisico  = $modelo->id. '-'. $imgNombreVirtual;
            \Storage::disk('local')->put(
                $imgNombreFisico, 
                \File::get($file)
            );
            $modelo->nombre_virtual = $imgNombreVirtual;
            $modelo->nombre_fisico  = $imgNombreFisico;
            $modelo->save();
        }

        $request->session()->flash('message', 'Producto Creado');
        return Redirect::to('Productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelo = Producto_Model::find($id);
        return view('Productos.index#Ver_Producto'.$id,["modelo"=>$modelo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelo = Producto_Model::find($id);
        $table_productos = Categoria_Model::orderBy('nombre')->get()->pluck('nombre','id');
        return view('Productos.index#Editar_Producto'.$id,["modelo"=>$modelo,"table_productos"=>$table_productos]);
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
        $validatedDate = $request->validate([
            'nombre'              => 'required|min:5|max:30',
            'descripcion'         => 'requiered|min:5',
            'precio'              => 'required|step:0.01|min:0|max:1000',
            'stock'               => 'required|step:1|min:0',
            'numeros_disponibles' => 'required|min:1',
            'color'               => 'required|min:1',
            'categoria_id'        => 'required|exist:categoria,id'
        ]);

        $modelo = Producto_Model::find($id);
        $modelo->fill($request->all());
        if($request->activo)
        {
            $modelo->activo = true;
        }
        else
        {
            $modelo->activo = false;
        }
        $modelo->save();

        //Almacena la imagen en ruta ftp
        $file = $request->file('imagen');
        if($file)
        {
            $modelo->imagen = base64_encode($file);
            $modelo->save();
        }

        $request->session()->flash('message', 'Producto Actualizado');
        return Redirect::to('Productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelo = Producto_Model::find($id);
        $modelo->delete();
        return Redirect::to('Productos');
    }
}
