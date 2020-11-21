<div class="modal-dialog modal-dialog-scrollable modal-md">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Actualizar Categoría</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        {{ Form::model($categoria, array('route'=>array('Categorias.update',$categoria->id),'method'=>'PUT')) }}
        <div class="modal-body">
            <div class="form-group md-4">
                {{ Form::label('nombre', 'Nombre') }}
                {{Form::text('nombre', Request::old('nombre'), ["class"=>"form-control"])}}
            </div>
            <div class="form-group md-4">
                {{ Form::label('estatus', 'Estatus activo') }}
                {{ Form::checkbox('estatus', Request::old('estatus'), $categoria->estatus, array('class' => 'form-control')) }}
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            {{ Form::submit('Actualizar Categoría', array('class'=>'btn btn-primary')) }}            
        </div>
        {{Form::close()}}
    </div>
</div>