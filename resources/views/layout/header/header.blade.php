<!DOCTYPE html>
<html lang="es">
	<nav class="navbar navbar-dark bg-dark fixed-top" style="height: 10.5vh; width:100%; opacity: 1;" >
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
						<a class="nav-link" href="{{ route('login') }}">{{ __('Acceder') }}</a>
				</ul>
				@if (Route::has('register'))
					<ul class="nav-item" style="padding-bottom: 38px; padding-right:30px">
						<a class="nav-link" href="{{ route('register') }}" >{{ __('Registrarse') }}</a>
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

	<!--Icono del sitio web-->
	<link rel="icon" href="..public/icons/logo1.png" type="image/x-ico" />
	<link rel="shortcut icon" type="image/x-icon" href="..public/icons/logo1.png" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
	<link rel="stylesheet" href="../Styles/fonts.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
		integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
		crossorigin="anonymous"></script>
		
        <!--Icono del sitio web-->
	<link rel="icon" href="{{asset('icons/logo1.png')}}" type="image/x-ico" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('icons/logo1.png')}}" />
</head>

