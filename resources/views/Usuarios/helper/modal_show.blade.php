<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                {{$usuario->name}}
            </h3>
        </div>
        <div class="modal-body">
            <strong>Tipo de Usuario</strong><br>
            @if(($usuario->rol_id)==1)Administrador @else Usuario @endif 
            <br>
            <strong>Correo</strong><br>
            {{$usuario->email}}<br>
            <strong>Fecha de creación</strong><br>
            {{$usuario->created_at}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
</div>