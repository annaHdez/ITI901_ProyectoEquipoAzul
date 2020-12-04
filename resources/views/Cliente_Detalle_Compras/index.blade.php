@extends('layouts.app')
@section('content')
<h3 class="text-center">Compras hechas por {{\Auth::user()->name}}</h3>
<div class="content" style="width: 80%; margin-left: 10%;">
    {{HTML::ul($errors->all())}}
    <table class="table table-striped">
        <thead>
            <th>Número</th>
            <th>Fecha de Compra</th>
            <th>Producto Comprado</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th>IVA</th>
            <th>Total a Pagar</th>
        </thead>
        <tbody>
            @foreach ($table_DetalleCompras as $compras)
                @if(($compras->user_id)==Auth::user()->id)
                    <tr>
                        No se han hecho compras
                        <td>{{$compras->id}}</td>
                        <td>{{$compras->created_at}}</td>
                        <td>{{$compras->getProducto->nombre}}</td>
                        <td>{{$compras->cantidad}}</td>
                        <td>{{$compras->subtotal}}</td>
                        <td>{{$compras->iva}}</td>
                        <td>{{$compras->total_precio}}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>
    @include('layout.footer.footer')
@endsection