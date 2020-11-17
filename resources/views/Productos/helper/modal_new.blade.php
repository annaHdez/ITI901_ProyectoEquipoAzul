{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'Productos','enctype'=>'multipart/form-data')) }}

    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Agregar Calzado</h5>
            </div>
            <div class="modal-body">
                <!--Area de Imagen--->
                <div>
                    <div class="row py-4">
                        <div class="col-lg-6 mx-auto">
                            <!-- Upload image input-->
                            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-dark shadow-sm">
                                <input id="uploadNew" type="file" name="imagen" onchange="readURLNew(this);" class="form-control border-0 ext-secondary" size="2000000" accept="image/*" required />
                                <label id="upload-labelNew" for="uploadNew" class="font-weight-light text-white">Elegir Imagen</label>
                                <div class="input-group-append">
                                    <label for="uploadNew" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Elegir Imagen</small></label>
                                </div>
                            </div>
                            <!-- Uploaded image area-->
                            <div class="image-area mt-4"><img id="imageResultNew" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                        </div>
                    </div>
                </div>
                <!--Fin área Imagen--->

                <!--Datos del platillo-->
                <div class="container">
                    <div class="">
                        <strong><h5>{{Form::label('nombre','Nombre',['class'=>'form text-black'])}}</h5></strong>
                        <input type="text" name="nombrePlatillo" class="form-control d-flex justify-content-center" placeholder="Nombre del Platillo" style="width: 80%;" required />
                    </div>

                    <strong><h5>{{Form::label('descripcion','Descripción',['class'=>'form text-black'])}}</h5></strong>
                    <div class="input-group" style="width: 80%;">
                        {{ Form::textArea('descripcion', Request::old('descripcion'),array('class' => 'form-control', 'required'=>true, 'maxlength'=> 200,'placeholder'=>'Breve descripción del calzado', 'rows'=>2)) }}
                    </div>
                    
                    <div style="width: 80%">
                        <strong><h5>{{Form::label('stock','Stock',['class'=>'form text-black'])}}</h5></strong>
                        <small class="text-secondary">Máximo 100 unidades</small>
                        {{ Form::number('stock', Request::old('stock'), array('class' => 'form-control', 'required'=>true, 'step'=>'1','min'=>'0','max'=>'100')) }}
                    </div>

                    <div>
                        <strong><h5>{{Form::label('precio','Precio',['class'=>'form text-black'])}}</h5></strong>
                        <div class="input-group" style="width: 80%;">
                            <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                            {{ Form::number('precio', Request::old('precio'), array('class' => 'form-control', 'required'=>true, 'step'=>'0.01','min'=>'0.01','placeholder'=>'Precio de venta unitario')) }}
                        </div>
                    </div>

                    <div>
                        <strong><h5>{{Form::label('id_categoria','Categoria',['class'=>'form text-black'])}}</h5></strong>
                        <div class="input-group mb-3" style="width: 80%;">
                            <div class="input-group-prepend"><label class="input-group-text" for="inputGroupSelect01">Categoría</label></div>
                            {{ Form::select('cproducto_id', $table_productos, Request::old('id_categoria'), array('class' => 'form-control')) }}
                        </div>

                        <strong><h5>{{Form::label('estatus','Disponible')}}</h5></strong>
                        <input type="checkbox" value="1" class="d-inline" name="estatus" id="estatus" />
                        <p class="d-inline">Seleccione si está disponible a la venta.</p><br>

                    </div>
                    {{ Form::submit('Registrar producto', ['class' => 'btn btn-primary'] ) }}
                </div>
                <!---->
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
    {{ Form::close() }}