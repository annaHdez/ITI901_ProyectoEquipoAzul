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
            <th>IVA</th>
            <th>Total a Pagar</th>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div>
    @include('layout.footer.footer')
@endsection