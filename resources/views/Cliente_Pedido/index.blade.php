@extends('layouts.app')
@section('content')
<h3 class="text-center">Compras hechas </h3>
<div class="content" style="width: 80%; margin-left: 10%;">
    {{HTML::ul($errors->all())}}
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
                    <td><?php echo var_dump($pedido);?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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