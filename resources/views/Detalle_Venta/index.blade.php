@extends('layouts.app')
@section('content')
<br>
<h1 class="text-center"><strong>Detalles de Ventas</strong></h1>
<div class="content" style="width: 80%; margin-left: 10%">
    <p class="text-justify">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, aperiam, 
        ratione vero sequi illo nesciunt quam veritatis natus obcaecati blanditiis aliquam 
        facere cum amet fugiat doloremque nisi. Exercitationem, adipisci. Ipsa.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ad impedit quo 
        libero cupiditate rerum at corrupti nihil ratione, dicta sequi error distinctio esse 
        sit. Obcaecati iusto velit deleniti tenetur!
    </p>
</div>
<hr>
<div class="content" style="margin-left: 3rem">
    <form autocomplete="off">
        <div class="row">
            <div class="form-group col-md-3">
                <h3><label for="categoria_buscar">Filtrar por Detalle de Ventas</label></h3>
                <input type="text" name="categoria_buscar" value="" class="form-control d-inline">
            </div>
        </div>
        <button class="btn btn-success d-inline">Buscar</button>
    </form>    
</div>
<br>
<div class="content" style="width: 80%; margin-left: 10%;">
    {{HTML::ul($errors->all())}}
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Fecha de Venta</th>
            <th>Productos Comprados</th>
            <th>Total</th>
        </thead>
        <tbody>
            <tr></tr>
        </tbody>
    </table>
</div>

    @include('layout.footer.footer')
@endsection
