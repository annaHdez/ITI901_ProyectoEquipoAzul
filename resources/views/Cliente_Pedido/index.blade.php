@extends('layouts.app')
@section('content')
<h3 class="text-center">Confirmación de carrito</h3>
<div class="content" style="width: 80%; margin-left: 10%;">
    {{HTML::ul($errors->all())}}
    <div class="content">
        <div class="d-inline-flex">
            {{Form::open(['url'=>'vaciarCarrito'])}}
                {{ Form::submit('Vaciar Carrito', array('class'=>'btn btn-danger d-inline-flex','onclick'=>"return confirm('¿Vaciar Carrito?')")) }}            
            {{Form::close()}}
        </div>
        <div class="d-inline-flex">
            {{Form::open(['url'=>'seguirComprando'])}}
                {{Form::submit('seguirComprando', array('class'=>'btn btn-primary d-inline-flex'))}}
            {{Form::close()}}
        </div>
    </div>
    <br>
    <table class="table table-striped">
        <thead>
            <th>Fecha de Compra</th>
            <th>Producto Comprado</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Subtotal</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
        @foreach ($carrito as $pedido)
            <tr>
                @if($pedido["idProducto"]==0)
                    <td>
                        <h1>No has añadido productos</h1>
                    </td>
                @else 
                    <td><?php echo $pedido["hoy"];?></td>
                    <td><?php echo $pedido["nombre"];?></td>
                    <td><?php echo $pedido["cantidad"];?></td>
                    <td>$<?php echo $pedido["precio"];?></td>
                    <td>$<?php echo $pedido["subtotal"];?></td>
                    <td>
                        {{Form::open(['url'=>'quitarElemento'.$pedido["idProducto"]])}}
                            {{Form::hidden('idProducto',$pedido["idProducto"])}}
                            {{Form::submit('Remover del pedido', array('class'=>'btn btn-danger','onclick'=> "return confirm('¿Finalizar Compra?')"))}}
                        {{Form::close()}}
                    </td>
                    <td>

                        <!--form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="business" value="easy2doyey@gmail.com">
                            <input type="hidden" name="lc" value="MX">
                            <input type="hidden" name="item_name" value="<php echo $pedido["nombre"];>">
                            <input type="hidden" name="amount" value="<php echo $pedido["precio"]>">
                            <input type="hidden" name="currency_code" value="MXN">
                            <input type="hidden" name="button_subtype" value="products">
                            <input type="hidden" name="no_note" value="0">
                            <input type="hidden" name="tax_rate" value="16.000">
                            <input type="hidden" name="shipping" value="25.00">
                            <input type="hidden" name="add" value="<php echo $pedido["cantidad"];>">
                            <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
                            <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                        </form-->
                    </td>
                @endif
            </tr>
        @endforeach    
        </tbody>
        <tfoot>
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
                    {{Form::hidden('idProducto_carrito',$idProducto_carrito)}}
                    {{Form::submit('Confirmar pedido', array('class'=>'btn btn-primary','onclick'=> "return confirm('¿Finalizar Compra?')"))}}
                {{Form::close()}}
                </td>
            </tr>
        </tfoot>
    </table>
</div>
    <br>
    @include('layout.footer.footer')
@endsection