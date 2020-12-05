<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForCustomer_Detalle_Compras_Model;
use App\Models\ForCustomer_DetalleVenta_Model;

class ForCustomer_Detalle_Compra_Controler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table_DetalleCompras = ForCustomer_DetalleVenta_Model::all();
        $whereClause = [];
        array_push($whereClause,["id_user",'!=',0]);
        return view('Cliente_Detalle_Compras.index',['table_DetalleCompras'=>$table_DetalleCompras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function excel()
    {
        $datos = new DataExcelExport([
            ['Id de Usuario','Nombre'        ,'Producto', 'Cantidad', 'IVA','Fecha '  ,'Total a pagar'],
            [4              ,'Rafael Vázquez','Tenis Cafés', 180, 16, '2020-11-26 19:39:07', 196 ]
        ]);
        return \Excel::download($datos,'detalleCompras.xlsx');
    }
}


