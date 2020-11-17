@extends('layouts.app')
<!--View-->
<link rel="stylesheet" href="{{ asset('css/LoadImage.css')}} ">
<script src="{{ asset('js/LoadImage.js') }}"></script>

<link rel="stylesheet" href="{{ asset('css/LoadImageNew.css') }}">
<script src="{{ asset('js/LoadImageNew.js')}}"></script>
@section('content')
<h1 class="text-center">Administración de Productos</h1>
<br>
<div class="container">
    <div class="inline-flex">
        <p class="text-justify">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, sapiente pariatur repellendus maiores
            consectetur recusandae autem, at explicabo corrupti nihil quaerat officiis ullam ipsum voluptatum?
            Eveniet modi molestiae impedit ut!.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem iste tenetur culpa? Iste, maiores ab, et
            quam non odio enim recusandae cupiditate eligendi distinctio eos dolorem. Officiis qui necessitatibus
            at!.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum laudantium animi illo nulla debitis
            voluptatum laborum doloremque natus quam, aperiam saepe, maiores possimus eaque incidunt excepturi.
            Sequi laborum culpa est.
        </p>
    </div>
</div>
<hr>
<div class="container">
    @foreach ($table_productos as $producto)
    <div class="card container d-table selector-for-some-widget text-break" id="Producto{{$producto->id}}" style="min-width: 18rem; padding: abstract;margin-top: 1.1rem;">
        <div style="margin-bottom: -2rem;">
           <img src="" alt="">
        </div>
        <div class="card-body " style="min-width: 100%;">
            <h5 class="card-title">{{$producto->nombre}}</h5>
            <div class="contiainer d-sm-inline-row">
                <button type="button" data-toggle="modal" data-target="#Ver_Producto{{$producto->id}}" class="btn btn-primary">Ver</button>
                <div class="modal fade" id="Ver_Producto{{$producto->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    @include('Productos.helper.modal_show')
                </div>
                {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}
                <button type="button" data-toggle="modal" data-target="#Editar_Producto{{$producto->id}}" class="btn btn-success">Actualizar</button>
                <div class="modal fade" id="Editar_Producto{{$producto->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    @include('Productos.helper.modal_edit')
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="d-inline-block" style="margin-left: 3%; margin-bottom: 1%; width:100%;">
    <a type="button" class="btn btn-success text-white sticky-bottom" data-toggle="modal" data-target="#Crear_Producto">Agregar Calzado
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z" />
            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z" />
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
        </svg>
    </a>
</div>
<div class="modal fade" id="Crear_Producto" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    @include('Productos.helper.modal_new')
</div>
    @include('layout.footer.footer')
@endsection