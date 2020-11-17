{{ HTML::ul($errors->all()) }}

{{Form::open(['url'=>'Usuarios','autocomplete'=>'off'])}}

<div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Agregar Usuario</h5>
        </div>
        <div class="modal-body">
             <!--nombre-->
    <div class="form-group col-md">
        {{Form::label('name','Nombre')}}
        {{Form::text('name', Request::old('name'), ["class"=>"form-control"])}}
    </div>

    <!--password-->
    <div class="form-group col-md">
        <label for="password" class="col-md">{{ __('Contraseña') }}</label>

        <div class="col-md">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group col-md">
        <label for="password-confirm" class="col-md">{{ __('Confirmar contraseña') }}</label>

        <div class="col-md">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <!--email-->
    <div class="form-group col-md">
        {{Form::label('email','Correo electrónico')}}
        {{Form::text('email', Request::old('email'), ["class"=>"form-control"])}}
    </div>

    <!--rol-->
    <div class="form-group col-md-3">
        {{ Form::label('rol', 'Rol de Usuario') }}
        {{ Form::select('rol', $table_rol, Request::old('rol'),  array('class' => 'form-control')) }}
    </div>
    <div class="form-group row">
        <label for="rol_id" class="col-md-4 col-form-label text-md-right">{{__('')}}</label>
        <div class="col-md-6">
            <input id="rol_id" type="hidden" class="form-control" value="2"  name="rol_id" required readonly>
        </div>
    </div>
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            {{ Form::submit('Registrar Usuario', ['class' => 'btn btn-primary'] ) }}
        </div>
    </div>
</div>
{{ Form::close() }}