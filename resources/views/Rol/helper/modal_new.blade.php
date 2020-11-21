{{ HTML::ul($errors->all()) }}

{{Form::open(['url'=>'Rol','autocomplete'=>'off'])}}

<div class="modal-dialog modal-dialog-scrollable modal-md">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Agregar Rol</h5>
        </div>
        <div class="modal-body">
            <div class="form-group col-md">
                {{Form::label('nombre','Nombre')}}
                {{Form::text('nombre', Request::old('nombre'), ["class"=>"form-control"])}}
            </div>
            <div class="form-group col-md">
                {{Form::label('estatus','Estatus')}}
                {{ Form::checkbox('estatus', Request::old('estatus'), true,  array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            {{ Form::submit('Registrar Rol', ['class' => 'btn btn-primary'] ) }}
        </div>
    </div>
</div>
{{ Form::close() }}