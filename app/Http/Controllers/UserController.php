<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rol_Model;
use App\Models\User;
use App\Models\UserEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Exports\DataExcelExport;

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
            //Ya que trabajamos con modals, en la misma página 
            //Requiere todas las referencias a la vez
            $table_users = UserEloquent::all();
            $table_rol   = Rol_Model::orderBy('nombre')->get()->pluck('nombre','id');
            $whereClause = [];
            if($request->nombre)
            {
                array_push($whereClause, [ "name" ,'like', '%'.$request->nombre.'%' ]);
            }
            //Filtrado de Usuarios
            $table_users = UserEloquent::orderBy('name')->where($whereClause)->get();

            //Limite de vista
            $table_limit_user = UserEloquent::orderBy('name')->skip(1)->take(2)->get();
            return view('Usuarios.index',["table_users"=>$table_users,"table_rol"=>$table_rol,"filtroNombre"=>$request->nombre,"table_limit_user"=>$table_limit_user]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table_rol = Rol_Model::orderBy('nombre')->get()->pluck('nombre','id');
        return view('Usuarios.index#Crear_Usuario',["table_rol"=>$table_rol]);
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
            'name'     => 'required|min:5|max:30',
            'password' => 'required|min:5|max:30',
            'email'    => 'required|email|unique:users',
            'rol_id'   => 'required'
        ]);

        $usrExistente = UserEloquent::where('email', $request->email)->first(); 
        
        if($usrExistente){
            return Redirect()->route('users.create')->withErrors(['email' => 'Mi error'])->withInput();
        }

        $mUser = new UserEloquent();
        $mUser->fill($request->all());
        $mUser->password = bcrypt($mUser->password);
        $mUser->save();

        // Regresa a lista de usuario
        //Session::flash('message', 'Usuario creado!');
        return Redirect::to('Usuarios');
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
        $modelo = UserEloquent::find($id);
        $table_rol = Rol_Model::orderBy('nombre')->get()->pluck('nombre','id');
        return view('Usuarios.index#Editar_Usuario'.$id,["modelo"=>$modelo,"table_rol"=>$table_rol]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {   
        $validatedData = $request->validate([
            'name'     => 'required|min:5|max:30',
            // 'email'    => 'required|email|unique:users',
            'rol_id'   => 'required|exists:rol,id'
        ]);

        $modelo = UserEloquent::find($id);
        $modelo->name          = $request->name;
        $modelo->email         = $request->email;
        $modelo->updated_at    = date('Y-m-d H:i:s');
        $modelo->rol_id        = $request->rol_id;
        $modelo->save();
        return Redirect::to('Usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelo = UserEloquent::find($id);
        $modelo->delete();
        return Redirect::to('Usuarios');
    }

    public function excel()
    {
        $datos = new DataExcelExport([
            ['Id de Usuario','Nombre'        ,'Correo'                ,'Fecha de Registro'  ,'Rol'],
            [4              ,'Rafael Vázquez','rafa.vz.rrf3@gmail.com','2020-11-26 19:39:07', 1   ]
        ]);
        return \Excel::download($datos,'usuarios.xlsx');
    }
}
