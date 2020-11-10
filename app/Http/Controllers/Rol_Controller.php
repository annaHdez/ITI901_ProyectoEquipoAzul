<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Rol_Model;

class Rol_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table_rol = Rol_Model::all();
        return view('Rol.index',["table_rol"=>$table_rol]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Rol.index#Crear_Rol',[]);
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
            'nombre'  => 'required|min:4|max:30'
        ]);
        $model_rol = new Rol_Model($request->all());
        if($request->estatus)
        {
            $model_rol->estatus = true;
        }
        else
        {
            $model_rol->estatus = false;
        }
        $model_rol->save();
        $request->session()->flash('message', 'Rol creado');
        return Redirect::to('Rol');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelo = Rol_Model::find($id);
        return view('Rol.index#Ver_Rol'.$id,["modelo"=>$modelo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelo = Rol_Model::find($id);
        $table_rol = Rol_Model::orderBy('id')->get()->pluck('nombre','id');
        return view('Rol.index#Editar_Rol'.$id,["modelo"=>$modelo,"table_rol"=>$table_rol]);
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
            'nombre' => 'required|min:4:|max:30'
        ]);
        $modelo = Rol_Model::find($id);
        $modelo->fill($request->all());
        if($request->estatus)
        {
            $modelo->estatus = true;
        }   
        else
        {
            $modelo->estatus = false;
        }
        $request->save();
        $request->session()->flash('message','Rol Actualizado');
        return Redirect::to('Rol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelo = Rol_Model::find($id);
        $modelo->delete();
        return Redirect::to('Rol');
    }
}
