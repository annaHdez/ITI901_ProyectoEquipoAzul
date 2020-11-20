<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                {{$categoria->nombre}}
            </h3>
        </div>
        <div class="modal-body">
            <strong>Estatus</strong><br>
            @if(($categoria->estatus)==1) Activo @else Inactivo @endif <br>
            <strong>Fecha de creación</strong><br>
            {{$categoria->created_at}}<br>
            <strong>Fecha de modificación</strong><br>
            {{$categoria->updated_at}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
</div>