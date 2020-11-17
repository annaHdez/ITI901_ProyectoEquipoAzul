<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rol_Model;
use App\Models\User;
use App\Models\UserEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::user()->rol_id!=1)
        {
            return view('NotAllowed');
        }
        else
        {
            $table_users = UserEloquent::all();
            $whereClause = [];
            if($request->nombre)
            {
                array_push($whereClause, [ "name" ,'like', '%'.$request->nombre.'%' ]);
            }
            $table_users = UserEloquent::orderBy('name')->where($whereClause)->get();
            return view('Usuarios.index',["table_users"=>$table_users,"filtroNombre"=>$request->nombre]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table_users = Rol_Model::orderBy('nombre')->get()->pluck('nombre','id');
        return view('Usuarios.index#Crear_Usuario',["table_users"=>$table_users]);
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
        $modelo = UserEloquent::find($id);
        return view('Usuarios.index#Ver_Usuario'.$id,["modelo"=>$modelo]);
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
