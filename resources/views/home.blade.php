@extends('layouts.app')
@section('content')
    <br><br>
    <h1 class="text-center"><strong>Inicio</strong></h1>
    <hr>
    <br>
    @if(\Auth::user()->rol_id==1)
        <h3 class="text-center">Bienvenido Administrador {{\Auth::user()->name}}</h3>
        <br>
        <p class="text-justify" style="margin-left: 10%">
            Recuerde que las secciones están en la parte superior de su menu. <br>
            Tenga mucho cuidado con los cambios que realice ya que una vez 
            que los haga no se podrán deshacer.
        </p>
        <br>
        <br>
    @else
        <h3 class="text-center">Bienvenido {{\Auth::user()->name}}</h3>
        <p class="text-justify" style="margin-left: 10%; margin-right: 10%">
            Esperamos que su experiencia de compra sea la mejor, estamos de revisando de
            manera constante el uso del sistema para que usted reciba la mejor atención 
            posible. Procuramos que sea fácil de comprender en su primer uso y que no
            tenga que recordar el funcionamiento.
            
        </p>
    @endif
    <br>
    @include('layout.footer.footer')
@endsection
