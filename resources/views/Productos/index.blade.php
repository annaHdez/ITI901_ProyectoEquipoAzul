@extends('layouts.app')

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
<div class="content" style="margin-left: 3rem">
    <form>
        <div class="row">
            <div class="form-group col-md-3">
                <h3><label for="producto_buscar">Filtrar por nombre de producto</label></h3>
                <input type="text" name="producto_buscar" value="{{$filtro_producto}}" class="form-control d-inline">
            </div>
        </div>
        <button class="btn btn-success d-inline">Buscar</button>
    </form>    
</div>
<hr>
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

<div class="container">
    
    @foreach ($modelo_producto as $producto)
    <div class="card-deck d-inline-flex">
        <div class="card container d-table selector-for-some-widget text-break" id="Producto{{$producto->id}}" style="max-width: 19rem; padding: abstract;margin-top: 1.1rem">
                <h4 class="card-title text-center">{{$producto->nombre}}</h4>
            @if(($producto->estatus==1)&&($producto->stock>0))
                <img src="{{asset('images/'.$producto->nombre_fisico)}}" class="card-img-top" alt="{{$producto->nombre}}"title="{{$producto->nombre}}" style="height: 200px;" />
            @else
                <strong><legend class="text-danger position-absolute" style="transform: rotate(-40deg); z-index: 50">No Disponible</legend></strong>
                <img src="{{asset('images/'.$producto->nombre_fisico)}}" class="card-img-top w-100" alt="{{$producto->nombre}}"title="{{$producto->nombre}}" style="height:200px;filter: grayscale(1);"/>
            @endif
            <div class="card-body " style="min-width: 100%;">                    
                <div class="contiainer d-inine-flex">
                    <button type="button" data-toggle="modal" data-target="#Ver_Producto{{$producto->id}}" class="btn btn-primary d-inline-flex">Ver</button>
                    <div class="modal fade" id="Ver_Producto{{$producto->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        @include('Productos.helper.modal_show')
                    </div>
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger d-inline-flex')) }}
                    <button type="button" data-toggle="modal" data-target="#Editar_Producto{{$producto->id}}" class="btn btn-success d-inline-flex">Actualizar</button>
                    <div class="modal fade" id="Editar_Producto{{$producto->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        @include('Productos.helper.modal_edit')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <br><br><br>
    <br>
    <br>
</div>
    @include('layout.footer.footer')
@endsection