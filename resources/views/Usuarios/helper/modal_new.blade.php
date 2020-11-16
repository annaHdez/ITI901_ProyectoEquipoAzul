{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'Usuarios','enctype'=>'multipart/form-data')) }}

<div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Agregar Usuario</h5>
        </div>
        <div class="modal-body">

            {{ Form::submit('Registrar Usuario', ['class' => 'btn btn-primary'] ) }}
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
{{ Form::close() }}