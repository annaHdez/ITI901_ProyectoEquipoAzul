@extends('layouts.app')

@section('content')

<a href="{{route('productos.create')}}">Registrar producto</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif

<h1 class="text-center">NUESTRO CALZADO </h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Imagen</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableProductos as $rowProducto)
            <tr>
                <td>
                    <a href="{{route('productos.show', $rowProducto->id)}}">{{$rowProducto->nombre}}</a>
                </td>
                    <td>{{$rowProducto->cproducto_id}}
                </td>
                <td>
                    <img src="{{asset('storage/'.$rowProducto->imgNombreFisico)}}"  alt="" width="20%">
                </td> 
                
            </tr>
        @endforeach
    </tbody>
</table>


@include('layout.footer.footer')
@endsection