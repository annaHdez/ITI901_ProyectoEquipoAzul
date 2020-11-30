@extends('layouts.app')
@section('content')
<h3 class="text-center">Confirmación de carrito</h3>
<div class="content" style="width: 80%; margin-left: 10%;">
    {{HTML::ul($errors->all())}}
    {{Form::open(['url'=>'vaciarCarrito'])}}
        {{ Form::submit('Vaciar Carrito', array('class'=>'btn btn-danger','onclick'=>"return confirm('¿Vaciar Carrito?')")) }}            
    {{Form::close()}}
    <table class="table table-striped">
        <thead>
            <th>Fecha de Compra</th>
            <th>Producto Comprado</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Subtotal</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($carrito as $pedido)
                <tr>
                    <?php echo var_dump($carrito);?>
                    <td>{{--$carrito->hoy--}}</td>
                    <td>{{--$carrito->nombre--}}</td>
                    <td>{{--$carrito->cantidad--}}</td>
                    <td>{{--$carrito->precio--}}</td>
                    <td>{{--($carrito->cantidad)*($carrito->precio)--}}</td>
                    <td>
                        {{ Form::open(['url'=>'quitarElemento'])}}
                                {{ Form::submit('Quitar Elemento', array('class'=>'btn btn-danger','onclick'=>"return confirm('¿Quitar Producto?')",'data-dismiss'=>'modal')) }}            
                        {{ Form::close()}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    @include('layout.footer.footer')
@endsection