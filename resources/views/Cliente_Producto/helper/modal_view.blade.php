<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <legend>
                <h3 class="modal-title" id="staticBackdropLabel{{$producto->id}}>{{$producto->nombre}}"></h3>
            </legend>
        </div>
        <div class="modal-body">
            <legend>Descripción</legend>
            {{$producto->descripcion}}
            <hr>
            <legend>Categoría</legend>
            {{$producto->getCategoria->nombre}}
            <hr>
            <legend>Precio</legend>
            ${{$producto->precio}}
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
</div>