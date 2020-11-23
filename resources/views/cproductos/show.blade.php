@extends('layouts.app')
@section('content')


<a href="{{route('cproductos.index')}}">Inicio</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información de la categoria del producto</th>
            <th>
                {{ Form::open(array('url' => route('cproductos.destroy', $modelo->id), 'class' => 'pull-right')) }}
                    <a class="btn btn-primary" href="{{route('cproductos.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Nombre de la Categoría </td> <td>{{$modelo->nombre}}</td></tr>
            <tr><td> Estatus </td> <td> @if($modelo->estatus) Disponible @else No @endif </td></tr>
            <tr><td> Fecha de registro </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Fecha de modificación </td> <td>{{$modelo->updated_at}}</td></tr>
    </tbody>

</table>

@include('layout.footer.footer')
@endsection