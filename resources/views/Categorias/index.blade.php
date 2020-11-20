@extends('layouts.app')
@section('content')
    <br>
    <h1 class="text-center"><strong>Adiministración de categorias</strong></h1>
    <div class="content" style="width: 80%; margin-left: 10%">
        <p class="text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, aperiam, 
            ratione vero sequi illo nesciunt quam veritatis natus obcaecati blanditiis aliquam 
            facere cum amet fugiat doloremque nisi. Exercitationem, adipisci. Ipsa.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ad impedit quo 
            libero cupiditate rerum at corrupti nihil ratione, dicta sequi error distinctio esse 
            sit. Obcaecati iusto velit deleniti tenetur!
        </p>
    </div>
    <hr>
    <div class="content" style="margin-left: 3rem">
        <form>
            <div class="row">
                <div class="form-group col-md-3">
                    <h3><label for="categoria_buscar">Filtrar por categoría</label></h3>
                    <input type="text" name="categoria_buscar" value="{{$filtro_categoria}}" class="form-control d-inline">
                </div>
            </div>
            <button class="btn btn-success d-inline">Buscar</button>
        </form>    
    </div>
    <br>
    <div class="d-inline-block" style="margin-left: 3%; margin-bottom: 1%; width:100%;">
        <a type="button" class="btn btn-success text-white sticky-bottom" data-toggle="modal" data-target="#Crear_Categoria">Agregar Categoría
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z" />
                <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z" />
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            </svg>
        </a>
    </div>
    <div class="modal fade" id="Crear_Categoria" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        @include('Categorias.helper.modal_new')
    </div>
    <br>
    <div class="content" style="width: 80%; margin-left: 10%;">
        {{HTML::ul($errors->all())}}
        <table class="table table-striped">
            <thead>
                <th>Nombre</th>
                <th>Estatus</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($table_categorias as $categoria)
                    <tr>
                        <td><strong>@if (($categoria->estatus)==1){{$categoria->nombre}} @else <strike>{{$categoria->nombre}}</strike> @endif</strong></td>
                        <td><strong>@if (($categoria->estatus)==1) Activo @else <div class="text-danger">Inactivo</div> @endif</strong></td>
                        <td>
                            <div class="contiainer d-inline-row">
                                <button type="button" data-toggle="modal" data-target="#Ver_Categoria{{$categoria->id}}" class="btn btn-primary">Ver</button>
                                <div class="modal fade" id="Ver_Categoria{{$categoria->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    @include('Categorias.helper.modal_show')
                                </div>
                                <button type="button" data-toggle="modal" data-target="#Editar_Categoria{{$categoria->id}}" class="btn btn-success">Actualizar</button>
                                <div class="modal fade" id="Editar_Categoria{{$categoria->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" Categoriae="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    @include('Categorias.helper.modal_edit')
                                </div>
                                @if(($categoria->id)!=1)
                                <div class="d-inline-flex">
                                    {{ Form::open(array('url' => route('Categorias.destroy', $categoria->id), 'class' => 'pull-right')) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger','onclick'=>"return confirm('Eliminar Categoría')")) }}
                                    {{ Form::close() }}
                                </div>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('layout.footer.footer')
@endsection
