<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto_Model;
use App\Models\Categoria_Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class Categoria_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $table_categorias = Categoria_Model::all();
        $whereClause      = [];
        if($request->categoria_buscar)
        {
            array_push($whereClause, [ "nombre" ,'like', '%'.$request->categoria_buscar.'%' ]);
        }
        $table_categorias       = Categoria_Model::orderBy('nombre')->where($whereClause)->get();
        $table_categorias_limit = Categoria_Model::orderBy('nombre')->skip(1)->take(2)->get();
        return view('Categorias.index',["table_categorias"=>$table_categorias,"filtro_categoria"=>$request->categoria_buscar,"table_limit_categoria"=>$table_categorias_limit]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Categorias.index#crear_categoria',[]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nombre' => 'required|min:2|max:30'
        ]);

        $categoria = new Categoria_Model($request->all());
        if($request->estatus)
        {
            $categoria->estatus = true;
        } 
        else
        {
            $categoria->estatus = false;
        }

        $categoria->save();

        #Regresamos a la vista
        $request->session()->flash('message','Categoría creada');
        return Redirect::to('Categorias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelo = Categoria_Model::find($id);
        return view('Categorias.index#VerCategoria',["modelo"=>$modelo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelo = Categoria_Model::find($id);
        $table_categorias = Categoria_Model::orderBy('nombre')->get()->pluck('nombre','id');
        return view('Categorias.index#Editar_Categoria'.$id,["modelo"=>$modelo, "table_categorias"=>$table_categorias]);
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
        $validateData = $request->validate([
            'nombre'  => 'required|min:2|max:30'
        ]);

        $categoria = Categoria_Model::find($id);
        $categoria->fill($request->all());
        if($request->estatus)
        {
            $categoria->estatus = true;
        }
        else
        {
            $categoria->estatus = false;
        }
        $categoria->save();

        $request->session()->flash('message','Categoría actualizada');
        return Redirect::to('Categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria_Model::find($id);
        $categoria->delete();
        return Redirect::to('Categorias');
    }
}
