@extends('layouts.app')
@section('content')
<br>
<h1 class="text-center">Administración de Usuarios</h1>
    <div class="content" style="margin-left: 3rem">
        <form>
            <div class="row">
                <div class="form-group col-md-3">
                    <h3><label for="nombre">Filtrar por nombre</label></h3>
                    <input type="text" name="nombre" value="{{$filtroNombre}}" class="form-control d-inline">
                </div>
            </div>
            <button class="btn btn-success d-inline">Buscar</button>
        </form>    
    </div>
    <br>
    <div class="d-inline-block" style="margin-left: 3%; margin-bottom: 1%; width:100%;">
        <a type="button" class="btn btn-success text-white sticky-bottom" data-toggle="modal" data-target="#Crear_Usuario">Agregar Usuario
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z" />
                <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z" />
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            </svg>
        </a>
    </div>
    <div class="modal fade" id="Crear_Usuario" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        @include('Usuarios.helper.modal_new')
    </div>
    <br>
    <div class="content" style="width: 80%; margin-left: 10%;">
        {{ HTML::ul($errors->all()) }}

        <table class="table table-stiped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($table_users as $usuario)
                    <tr>
                        <td><strong>{{$usuario->name}}</strong></td>
                        <td>{{$usuario->email}}</td>
                        <td>@if(($usuario->rol_id)==1)Administrador @else Usuario @endif </td>
                        <td>
                            <div class="contiainer d-inline-row">
                                <button type="button" data-toggle="modal" data-target="#Ver_Usuario{{$usuario->id}}" class="btn btn-primary">Ver</button>
                                <div class="modal fade" id="Ver_Usuario{{$usuario->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    @include('Usuarios.helper.modal_show')
                                </div>
                            <!--Boton de actualizar-->
                                <button type="button" data-toggle="modal" data-target="#Editar_Usuario{{$usuario->id}}" class="btn btn-success">Actualizar</button>
                                <div class="modal fade" id="Editar_Usuario{{$usuario->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    @include('Usuarios.helper.modal_edit')
                                </div>
                                <!--Boton de borrar-->
                                <!--Evita que el administrador principal sea borrado-->
                                @if(($usuario->id)!=1)
                                <div class="d-inline-flex">
                                    {{ Form::open(array('url' => route('Usuarios.destroy', $usuario->id), 'class' => 'pull-right')) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger','onclick'=>"return confirm('Eliminar usuario')")) }}
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
    
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    @include('layout.footer.footer')
@endsection

