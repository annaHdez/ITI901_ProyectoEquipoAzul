@extends('layouts.app')
@section('content')
    <br>
    <h1 class="text-center">Administración de Roles</h1>
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
    <div class="content" style="margin-left: 3rem">
        <form>
            <div class="row">
                <div class="form-group col-md-3">
                    <h3><label for="nombre_buscar">Filtrar por nombre</label></h3>
                    <input type="text" name="nombre_buscar" value="{{$filtro_rol}}" class="form-control d-inline">
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
    <br>
    <div class="d-inline-block" style="margin-left: 3%; margin-bottom: 1%; width:100%;">
        <a type="button" class="btn btn-success text-white sticky-bottom" data-toggle="modal" data-target="#Crear_Rol">Agregar Rol
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z" />
                <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z" />
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            </svg>
        </a>
        <div class="d-inline-flex">
            {{ Form::open(['url'=>'excel','method'=>'get'])}}
                {{ Form::submit('Descargar Excel', array('class' => 'btn btn-success')) }}
                <img src="{{asset('icons/excel-logo.png')}}" alt="" style="width: 2rem;height: 2rem;"/>
            {{ Form::close() }}
        </div>
    </div>
    <div class="modal fade" id="Crear_Rol" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        @include('Rol.helper.modal_new')
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
                @foreach ($table_rol as $rol)
                    <tr>
                        <td><strong>@if (($rol->estatus)==1){{$rol->nombre}} @else <strike>{{$rol->nombre}}</strike> @endif</strong></td>
                        <td><strong>@if (($rol->estatus)==1) Activo @else <div class="text-danger">Inactivo</div> @endif</strong></td>
                        <td>
                            <div class="contiainer d-inline-row">
                                <button type="button" data-toggle="modal" data-target="#Ver_Rol{{$rol->id}}" class="btn btn-primary">Ver</button>
                                <div class="modal fade" id="Ver_Rol{{$rol->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    @include('Rol.helper.modal_show')
                                </div>
                                <button type="button" data-toggle="modal" data-target="#Editar_Rol{{$rol->id}}" class="btn btn-success">Actualizar</button>
                                <div class="modal fade" id="Editar_Rol{{$rol->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    @include('Rol.helper.modal_edit')
                                </div>
                                @if(($rol->id)!=1)
                                <div class="d-inline-flex">
                                    {{ Form::open(array('url' => route('Rol.destroy', $rol->id), 'class' => 'pull-right')) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger','onclick'=>"return confirm('Eliminar Rol')")) }}
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