{{ HTML::ul($errors->all()) }}

{{ Form::model( $producto, array('route' => array('Productos.update', $producto->id), 'method' => 'PUT','enctype'=>'multipart/form-data') ) }}

<div class="modal-dialog modal-dialog-scrollable modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Actualizar Producto</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div>
							<div class="row py-4">
								<div class="col-lg-6 mx-auto">

									<!-- Upload image input-->
									<div class="input-group mb-3 px-2 py-2 rounded-pill bg-dark shadow-sm">
										<input id="upload" type="file" onchange="readURL(this);"
											class="form-control border-0 text-secondary" name="imagen">
										<label id="upload-label" for="upload"
											class="font-weight-light text-white">Elegir
											Imagen</label>
										<div class="input-group-append">
											<label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i
													class="fa fa-cloud-upload mr-2 text-muted"></i><small
													class="text-uppercase font-weight-bold text-muted">Choose
													file</small></label>
										</div>
									</div>

									<!-- Uploaded image area-->
									<div class="image-area mt-4"><img id="imageResult" src="#" alt=""
											class="img-fluid rounded shadow-sm mx-auto d-block">
                                    </div>
                                    <div class="img-area mt-4">
                                        <img src="{{asset('images/'.$producto->nombre_fisico)}}" alt="{{$producto->nombre}}">
                                    </div>
								</div>
							</div>
						</div>
						<div>


						</div>
					</div>
					<br>
					<div class="container">
						<div class="form-group col-md-6">
                            <strong><h5>{{ Form::label('nombre', 'Nombre') }}</h5></strong>
                            {{ Form::text('nombre', null, array('class' => 'form-control', 'required'=>true)) }}
                        </div>
						
						<div class="form-group col-md-6">
							<strong><h5>{{ Form::label('stock', 'Stock') }}</h5></strong>
							{{ Form::number('stock', Request::old('stock'), array('class' => 'form-control', 'required'=>true)) }}
						</div>

                        <div class="form-group col-md-6">
                            <strong><h5>{{ Form::label('descripcion', 'Descripción') }}</h5></strong>
                            <div class="input-group" style="width: 150%;">
                                <div class="input-group-prepend"><span class="input-group-text">Breve descripción</span></div>
                                {{ Form::textArea('descripcion', Request::old('descripcion'), array('class' => 'form-control', 'required'=>true, 'maxlength'=> 200, 'rows'=>3)) }}    
                            </div>
                        </div>
						
						<div class="form-group col-md-6">
							<strong><h5>{{ Form::label('precio', 'Precio') }}</h5></strong>
							<div class="input-group" style="width: 100%;">
								<div class="input-group-prepend"><span class="input-group-text">$</span></div>
								{{ Form::number('precio', Request::old('precio'), array('class' => 'form-control', 'required'=>true, 'step'=>'.01')) }}
							</div>
						</div>
						
						<div class="form-group col-md-8">
							<strong><h5>{{ Form::label('categoria_id', 'Categoría') }}</h5></strong>
							<div class="input-group mb-3" style="width: 80%;">
								{{ Form::select('categoria_id', $table_categoria, $producto->getCategoria->nombre,  array('class' => 'form-control')) }}
							</div>
						</div>
						<div>
                            <strong><h5>{{ Form::label('estatus', 'Estatus de venta') }}</h5></strong>
                            {{ Form::checkbox('estatus', Request::old('estatus'), $producto->estatus, array('class' => 'form-control')) }}
						</div>
					</div>
					<br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					{{ Form::submit('Actualizar producto', array('class' => 'btn btn-primary')) }}
				</div>
			</div>
        </div>
        {{ Form::close() }}