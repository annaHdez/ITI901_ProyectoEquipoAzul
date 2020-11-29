<!DOCTYPE html>
<html lang="es">
	<nav class="navbar navbar-dark bg-dark fixed-top" style="height: 15vh; width:100%; opacity: 1;" >
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">                
		<ul class="navbar-nav mr-auto">
			<a href="" class="btn text-white nav-item table table-dark">
				<h2><strong>MpShoes</strong></h2>
			</a>
		</ul>     
		<ul class="navbar-nav mr-auto" style="margin-left: -57%;">
			<img src="{{asset('icons/logo1.png')}}" alt="logo" style="width: 80px; height: 100px; padding-bottom: 45px; ">
		</ul>                    
			@guest
				<ul class="nav-item" style="padding-bottom: 38px; padding-right:30px">
						<a class="btn btn-outline-primary" href="{{ route('login') }}">{{ __('Acceder') }}</a>
				</ul>
				@if (Route::has('register'))
					<ul class="nav-item" style="padding-bottom: 38px; padding-right:30px">
						<a class="btn btn-outline-success" href="{{ route('register') }}" >{{ __('Registrarse') }}</a>
					</ul>
				@endif         
			@endguest             
	</nav>
<head>	

	<link rel="stylesheet" type="text/css" href="Styles/Bootstrap/dist/css/bootstap.css">
	<title lang="es" dir="ltr">MP Shoes</title>
	<meta charset="utf-8">
	<meta name="description" content="Sitio Oficial de MP Shoes">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Zapatos, Pedir, en línea">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	@include('html.boostrap')
	@include('html.alertify')
		
        <!--Icono del sitio web-->
	<link rel="icon" href="{{asset('icons/logo1.png')}}" type="image/x-ico" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('icons/logo1.png')}}" />
</head>

