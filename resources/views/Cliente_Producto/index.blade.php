@extends('layouts.app')
@section('content')
    <h1 class="text-center">Bienvenido al Catálogo de Productos</h1>
    <p class="text-justify" style="margin-right: 10%;margin-left: 10%;"></p>
    <hr>
    <div class="content" style="margin-left: 3rem">
        <div class="d-inline-flex">
            <form autocomplete="off">
                <div class="row">
                    <div class="form-group col-md-10">
                        <h5><label for="producto_buscar">Buscar por nombre</label></h5>
                        <input type="text" name="producto_buscar" value="{{$filtro_producto}}" class="form-control d-inline">
                    </div>
                </div>
                <button class="btn btn-success d-inline">
                    Buscar
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                    </svg>
                </button>
            </form>    
            <form autocomplete="off">
                <div class="row">
                    <div class="form-group col-md-10">
                        <h5><label for="categoria_buscar">Buscar por Categorías</label></h5>
                        <input type="text" name="categoria_buscar" value="{{$filtro_categoria}}" class="form-control d-inline">
                    </div>
                </div>
                <button class="btn btn-success d-inline">
                    Buscar
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                    </svg>
                </button>
            </form>    
        </div>
        
    </div>
    <hr>
    @foreach ($table_productos as $producto)
        @if(($producto->estatus==1)&&($producto->stock>0))
        <div class="card-deck d-inline-flex">
            <div class="card container d-table selector-for-some-widget text-break" id="Producto{{$producto->id}}" style="max-width: 19rem; padding: abstract;margin-top: 1.1rem">
                    <h4 class="card-title text-center">{{$producto->nombre}}</h4>                
                    <img src="{{asset('images/'.$producto->nombre_fisico)}}" class="card-img-top" alt="{{$producto->nombre}}"title="{{$producto->nombre}}" style="height: 200px;" />
                <div class="card-body " style="min-width: 100%;">                    
                    <div class="contiainer d-inine-flex">
                        <button type="button" data-toggle="modal" data-target="#Ver_Producto{{$producto->id}}" class="btn btn-primary d-inline-flex">Ver</button>
                        <div class="modal fade" id="Ver_Producto{{$producto->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            @include('Cliente_Producto.helper.modal_view')
                        </div>
    
                        <button type="button" data-toggle="modal" data-target="#AgregarCarrito_Producto{{$producto->id}}" class="btn btn-success d-inline-flex" onclick="alertify.success('Agregado al carrito');">Agregar a carrito</button>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
    <br><br>
    @include('layout.footer.footer')
@endsection