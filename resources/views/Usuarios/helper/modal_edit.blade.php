{{ HTML::ul($errors->all()) }}
{{ Form::model($usuario, array('route'=>array('Usuarios.update',$usuario->id),'method'=>'PUT')) }}

<div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Actualizar Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="">

                    <div class="form-group col-md-4">
                        {{ Form::label('nombre', 'Nombre') }}
                        {{Form::text('name', Request::old('name'), ["class"=>"form-control"])}}
                    </div>
                
                    <!--email-->
                    <div class="form-group col-md-4">
                        {{Form::label('email','Correo electrónico')}}
                        {{Form::text('email', Request::old('email'), ["class"=>"form-control","readonly"=>"true"])}}
                    </div>
                
                    <!--Aseguramos que siempre exista un super administrador a fin de tener disponibilidad en todo momento de cambios--->
                    @if(($usuario->id)!=1)
                    <div class="form-group col-md-4">
                        {{ Form::label('rol', 'Rol') }}<br>
                        {{ Form::select('rol',$table_rol,$usuario->rol_id,array('class' => 'form-control')) }}
                    </div>
                    @endif
                </div>             
            </div>
            <br>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            {{ Form::submit('Actualizar Usuario', array('class'=>'btn btn-primary')) }}            
        </div>
    </div>
</div>
{{Form::close()}}
