@extends('layouts.app')

@section('content')

<a href="{{route('productos.index')}}">Regresar</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif


<h1 class="text-center">FORMULARIO DE TIPO DE CALZADO</h1>
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'cproductos')) }}

<div class="row">

<div class="form-group col-md-4">
        {{ Form::label('nombre', 'Tipo de calzado') }}
        {{ Form::text('nombre', Request::old('nombre'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 100)) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('estatus', 'Estatus') }}
        {{ Form::checkbox('estatus', Request::old('estatus'), false,  
           array('class' => 'form-control')) }}
    </div>

</div>

    {{ Form::submit('Registrar categoría', ['class' => 'btn btn-primary'] ) }}

{{ Form::close() }}


@include('layout.footer.footer')
@endsection