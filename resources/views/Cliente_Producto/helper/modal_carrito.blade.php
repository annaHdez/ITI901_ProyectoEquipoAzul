
<div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <legend>
                <h3 class="modal-title" id="staticBackdropLabel">Pedido</h3>
            </legend>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <table class="table table-striped">
                <thead>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($table_productos as $producto)
                    <tr>  
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->cantidad}}</td>
                        <td>{{$producto->precio}}</td>
                        <td>
                            {{{ Form::open(['url'=>'quitarElemento'.$producto->id])}}}
                                {{ Form::submit('Quitar Elemento', array('class'=>'btn btn-danger','onclick'=>"return confirm('¿Quitar Producto?')",'data-dismiss'=>'modal')) }}            
                            {{ Form::close()}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <div class="container">
                        <td class="d-block">IVA      $24</td>
                        <td class="d-block">Subtotal $300</td>
                        <td class="d-block">Total    $324</td>
                    </div>
                </tfoot>
            </table>
            {{{ Form::open(['url'=>'vaciarCarrito'])}}}
                {{ Form::submit('Vaciar carrito', array('class'=>'btn btn-danger','onclick'=>"return confirm('¿Vaciar carrito?')",'data-dismiss'=>'modal')) }}            
            {{ Form::close()}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            {{Form::open(['url'=>'confirmarPedido'])}}
                {{ Form::submit('Confirmar Pedido', array('class'=>'btn btn-success','onclick'=>" alertify.success('Pedido con éxito');",'data-dismiss'=>'modal')) }}            
            {{ Form::close() }}
        </div>
    </div>
</div>
