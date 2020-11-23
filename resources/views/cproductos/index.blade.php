@extends('layouts.app')
@section('content')

<a href="{{route('cproductos.create')}}">Registrar tipo de calzado</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<h1 class="text-center">TIPO DE CALZADO</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Estatus</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableProductos as $rowProducto)
            <tr>
                <td>
                    <a href="{{route('cproductos.show', $rowProducto->id)}}">{{$rowProducto->nombre}}</a>
                </td>
                <td>{{$rowProducto->estatus}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@include('layout.footer.footer')
@endsection