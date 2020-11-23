@extends('layouts.app')

@section('content')

<a href="{{route('cproductos.show', $modelo->id) }}">Regresar</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<h1 class="text-center">EDITAR EL TIPO DE CALZADO</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('cproductos.update', $modelo->id), 'method' => 'PUT') ) }}

<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre de la Categoría') }}
        {{ Form::text('nombre', null, 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('estatus', 'Estatus estatus') }}
        {{ Form::checkbox('estatus', Request::old('estatus'), $modelo->estatus,
           array('class' => 'form-control')) }}
    </div>

</div>
{{ Form::submit('Actualizar Tipo de Categoría', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@include('layout.footer.footer')
@endsection