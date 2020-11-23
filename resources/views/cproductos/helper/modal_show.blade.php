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
            <legend>Precio</legend>
            ${{$producto->precio}}
            <legend>Disponible</legend>
            @if(($producto->estatus)&&(($producto->stock)>0)) Sí @else No @endif
            <hr>
            <legend>Stock</legend>
            {{$producto->stock}}
            <legend>Categoría</legend>
            {{$producto->getCategoria->nombre}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
</div>