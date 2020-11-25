<!DOCTYPE html>
<html lang="es">

<head>
	<link rel="stylesheet" type="text/css" href="Styles/Bootstrap/dist/css/bootstap.css">
	<title lang="es" dir="ltr">MP Shoes</title>
	<meta charset="utf-8">
	<meta name="description" content="Sitio Oficial de MP Shoes">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Zapatos, Pedir, en línea">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Boostrap-->
    @include('layouts.html.boostrap')
    
    <!--Alertify-->
    @include('layouts.html.alertify')
    
    <!--Icono del sitio web-->
	<link rel="icon" href="{{asset('icons/log.png')}}" type="image/x-ico" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('icons/log.ico')}}" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container">
                <ul class="navbar-nav mr-auto d-inline">
                    <a href="" class="btn text-white nav-item table table-dark d-inline"><h2><strong>MpShoes</strong></h2></a>
                </ul>     
                <button class="navbar-toggler d-inline" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="btn btn-success" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @if(\Auth::user()->rol_id==1)
                            <ul>
                                <li class="nav-item d-inline" style="margin-right: 2rem;">
                                    <a href="{{route('Usuarios.index')}}" class="nav-link text-white d-inline">Usuarios</a>
                                </li>
                                <li class="nav-item d-inline" style="margin-right: 2rem;">
                                    <a href="{{route('Rol.index')}}" class="nav-link text-white d-inline">Roles</a>
                                </li>
                                <li class="nav-item d-inline" style="margin-right: 2rem;">
                                    <a href="{{route('Producto.index')}}" class="nav-link text-white d-inline">Productos</a>
                                </li>
                                <li class="nav-item d-inline" style="margin-right: 2rem;">
                                    <a href="{{route('Categorias.index')}}" class="nav-link text-white d-inline">Categorías</a>
                                </li>
                                <li class="nav-item d-inline" style="margin-right: 5rem;">
                                    <a href="{{route('Detalle_Venta.index')}}" class="nav-link text-white d-inline">Detalle de ventas</a>
                                </li>
                                <li class="nav-item d-inline" style="margin-right: 4rem;">
                                    <a id="navbarDropdown" class="nav-link text-white d-inline" href="#" role="button" onclick="alertify.message('Usuario Actual');" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                    </a>
                                </li>
                                <li class="nav-item d-inline">
                                    <a class="btn btn-outline-danger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" >
                                        {{ __('Cerrar Sesión') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none btn btn-outline-danger">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                            
                            @else 
                            <ul>
                                <li class="nav-item d-inline" style="margin-right: 2rem;">
                                    <a href="" class="nav-link text-white d-inline">Productos</a>
                                </li>
                                <li class="nav-item d-inline" style="margin-right: 2rem;">
                                    <a href="" class="nav-link text-white d-inline">Detalles de Compra</a>
                                </li>
                                <li class="nav-item d-inline" style="margin-right: 4rem;">
                                    <a id="navbarDropdown" class="nav-link text-white d-inline" href="#" role="button" onclick="alertify.message('Usuario Actual');" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                    </a>
                                </li>
                                <li class="nav-item d-inline">
                                    <a class="btn btn-outline-danger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" >
                                        {{ __('Cerrar Sesión') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none btn btn-outline-danger">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @auth
            
        @endauth
        <br><br><br><br>
        <main class="p-5">
            @yield('content')
        </main>
    </div>
</body>
</html>
