@extends('layouts.app')
@section('content')
<h3 class="text-center">Confirmación de carrito</h3>
<div class="content" style="width: 80%; margin-left: 10%;">
    {{HTML::ul($errors->all())}}
    <div class="content">
        @if((doubleval($subtotal_carrito)>0)&&(doubleval($iva_carrito)>0)&&(doubleval($total_carrito)>0))
            <div class="d-inline-flex">
                {{Form::open(['url'=>'vaciarCarrito'])}}
                    {{ Form::submit('Vaciar Carrito', array('class'=>'btn btn-danger d-inline-flex','onclick'=>"return confirm('¿Vaciar Carrito?')")) }}            
                {{Form::close()}}
            </div>
        @else
            <div class="d-inline-flex">
                {{Form::open(['url'=>'seguirComprando'])}}
                    {{Form::submit('seguirComprando', array('class'=>'btn btn-primary d-inline-flex'))}}
                {{Form::close()}}
            </div>
        @endif
    </div>
    <br>
    @dump(intval(Auth::user()->id))
    <?php $id_user = intval(Auth::user()->id);?>
    <table class="table table-striped">
        <thead>
            <th>Fecha de Compra</th>
            <th>Producto Comprado</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Subtotal</th>
        </thead>
        <tbody>
        @foreach ($carrito as $pedido)
            @if((doubleval($subtotal_carrito)>0)&&(doubleval($iva_carrito)>0)&&(doubleval($total_carrito)>0))
                <tr>
                    <td><?php echo $pedido["hoy"];?></td>
                    <td><?php echo $pedido["nombre"];?></td>
                    <td><?php echo $pedido["cantidad"];?></td>
                    <td>$<?php echo $pedido["precio"];?></td>
                    <td>$<?php echo $pedido["subtotal"];?></td>
                </tr>
            @else 
                <tr>    
                    <td>
                        <h1>No has añadido productos</h1>
                    </td>
                </tr>
            @endif
        @endforeach    
        </tbody>
        <tfoot>
            @if((doubleval($subtotal_carrito)>0)&&(doubleval($iva_carrito)>0)&&(doubleval($total_carrito)>0))
            <tr>
                <td><strong>Subtotal a pagar:</strong></td>
                <td>$<?php echo doubleval($subtotal_carrito);?>&nbsp;MXN</td>
            </tr>
            <tr>
                <td><strong>IVA</strong></td>
                <td>$<?php echo doubleval($iva_carrito);?>&nbsp;MXN</td>
            </tr>
            <tr>
                <td><strong>Total a pagar:</strong></td>
                <td>$<?php echo doubleval($total_carrito);?>&nbsp;MXN</td>
            </tr>
            <tr>
                <td>
                    
                    {{Form::open(['url'=>'confirmarPedido'])}}
                        {{Form::hidden('id_user',intval(Auth::user()->id),array('class'=>'form-control col-sm-3'))}}
                        {{Form::hidden('idProducto',$idProducto_carrito,array('class'=>'form-control col-sm-3'))}}
                        {{Form::hidden('nombre',$nombre,array('class'=>'form-control col-sm-3'))}}
                        {{Form::hidden('cantidad',$cantidad,array('class'=>'form-control col-sm-3'))}}
                        {{Form::hidden('stock',$stock,array('class'=>'form-control col-sm-3'))}}
                        {{Form::hidden('subtotal',doubleval($subtotal_carrito),array('class'=>'form-control col-sm-3'))}}
                        {{Form::hidden('iva',doubleval($iva_carrito),array('class'=>'form-control col-sm-3'))}}
                        {{Form::hidden('total',doubleval($total_carrito),array('class'=>'form-control col-sm-3'))}}
                        {{Form::submit('Confirmar pedido', array('class'=>'btn btn-primary','onclick'=> "return confirm('¿Finalizar Compra?')"))}}
                    {{Form::close()}}
                </td>
            </tr>
            @endif
        </tfoot>
    </table>
</div>
    <br>
    @include('layout.footer.footer')
@endsection