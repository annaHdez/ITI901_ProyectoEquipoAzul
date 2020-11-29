
@extends('layout.header.header')

<!DOCTYPE html>    
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <!--@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif-->

            
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
		<img class="d-block w-100" src="{{asset('images/2G.jpg')}}" class="d-block w-100" style="height: 80vh;" alt="First slide">
		<div class="carousel-caption d-none d-md-block">					
			<p>La comodidad esta en tus pies, imagina lo mejor en cada paso.</p>
		</div>
	</div>
	
	@foreach($table_producto as $producto)
		@if(($producto->estatus==1)&&($producto->stock>0))
			<div class="carousel-item">
				<img class="d-block w-100" src="{{asset('images/'.$producto->imgNombreFisico)}}" class="d-block w-100" style="height: 80vh;" alt="Second slide">
			</div>
			<div class="carousel-caption d-none d-md-block">					
				<p>{{$producto->descripcion}}</p>
			</div>	
		@endif
	@endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	<br>
	<div class="container">
		<div class="">
			<strong class="d-block text-center">
				<h2>¿Quienes Somos?</h2>
			</strong>
			<br>
			<p class="text-justify ">
			Somos una empresa orgullosamente Mexicana con orígen en la ciudad de León, Guanajuato "Capital Nacional del Calzado".
			MP Shoes es una empresa familiar, que en base a esfuerzo,dedicación, responsabilidad y corazón de todo su personal esta permitiendo
			que el calzado cumpla con la moda a tus pies. Estamos continuamente a la vanguardia en nuestros modelos para ofrecer
			a usted la mejor relación en precio, calidad y moda.
			</p>
		</div>
	</div>
	<hr>

	<br>
	<div class="row">
		<div class="col text-center">
			<hr class="d-inline p-2">
			<h2 class="text-muted d-inline p-2">Nuestros productos </h2>
			<hr class="d-inline p-2">
		</div>
	</div>
	<br>


	<!--Carrusel de Productos-->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="{{asset('images/2G.jpg')}}" class="d-block w-80" style="height: 70vh;" alt="First slide">
				<div class="carousel-caption d-none d-md-block">					
					<p>La comodidad esta en tus pies, imagina lo mejor en cada paso.</p>
				</div>
			</div>
			@foreach($table_producto as $carrusel)
				@if(($carrusel->estatus==1)&&($carrusel->stock>1))
				<div class="carousel-item">
					<div class="container">
						<div class="card-deck">
							<div class="card" style="max-height: 32rem;max-width: 22rem;">
								<img src="{{asset('images/'.$carrusel->imgNombreFisico)}}" alt="{{$carrusel->nombre}}" class="img-top text-center" style="height: 17rem;width: 21.5rem">
								<div class="card-body">
									<h5 class="card-title">{{$carrusel->nombre}}</h5>
									<p class="card-text"><strong>Categoria:</strong>&nbsp;{{$carrusel->getCategoria->nombre}}</p>
									<p class="card-text">{{$carrusel->descripcion}}</p>
									<p class="card-text"><strong>Precio Unitario</strong>&nbsp;$ {{$carrusel->precio}}</p>
									
									<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Agregar al carrito</button>
								</div>
							</div>
							
							<div class="card" style="max-height: 32rem;max-width: 22rem;">
								<img src="{{asset('images/'.$carrusel->imgNombreFisico)}}" alt="{{$carrusel->nombre}}" class="img-top text-center" style="height: 17rem;width: 21.5rem">
								<div class="card-body">
									<h5 class="card-title">{{$carrusel->nombre}}</h5>
									<p class="card-text"><strong>Categoria:</strong>&nbsp;{{$carrusel->getCategoria->nombre}}</p>
									<p class="card-text">{{$carrusel->descripcion}}</p>
									<p class="card-text"><strong>Precio Unitario</strong>&nbsp;$ {{$carrusel->precio}}</p>
									
									<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Agregar al carrito</button>
								</div>
							</div>
	
							<div class="card" style="max-height: 32rem;max-width: 22rem;">
								<img src="{{asset('images/'.$carrusel->imgNombreFisico)}}" alt="{{$carrusel->nombre}}" class="img-top text-center" style="height: 17rem;width: 21.5rem">
								<div class="card-body">
									<h5 class="card-title">{{$carrusel->nombre}}</h5>
									<p class="card-text"><strong>Categoria:</strong>&nbsp;{{$carrusel->getCategoria->nombre}}</p>
									<p class="card-text">{{$carrusel->descripcion}}</p>
									<p class="card-text"><strong>Precio Unitario</strong>&nbsp;$ {{$carrusel->precio}}</p>
									
									<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Agregar al carrito</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif
			@endforeach
			
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!---->
	<br>
	<div class="container">
		<h1 class="text-center"><em>La emoción de caminar con libertad</em></h1>
		<p class="text-justify">
		Estamos interesados en ser pioneros de innovación y comodidad, por lo que en el proceso 
		creativo de nuestros modelos, siempre consideramos los factores que brindarán a nuestro cliente originalidad,
	    comodidad y calidad en cada paso que dé.
			<br><br>
			<small class="d-flex" style="float: right;">MP Shoes</small>
		</p>
	</div>
	<!---->
	<div class="container">
		<hr class="d-line text-center">
		<h2 class="d-line text-center">Nuevos Productos </h2>
		<hr class="d-line text-center">
	</div>
	<!---->

	<!--Carrusel de Productos-->
	<div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="{{asset('images/2G.jpg')}}" class="d-block w-80" style="height: 70vh;" alt="First slide">
				<div class="carousel-caption d-none d-md-block">					
					<p>La comodidad esta en tus pies, imagina lo mejor en cada paso.</p>
				</div>
			</div>
			@foreach($table_producto as $carrusel)
				@if(($carrusel->estatus==1)&&($carrusel->stock>1))
				<div class="carousel-item">
					<div class="container">
						<div class="card-deck">
							<div class="card" style="max-height: 32rem;max-width: 22rem;">
								<img src="{{asset('images/'.$carrusel->imgNombreFisico)}}" alt="{{$carrusel->nombre}}" class="img-top text-center" style="height: 17rem;width: 21.5rem">
								<div class="card-body">
									<h5 class="card-title">{{$carrusel->nombre}}</h5>
									<p class="card-text"><strong>Categoria:</strong>&nbsp;{{$carrusel->getCategoria->nombre}}</p>
									<p class="card-text">{{$carrusel->descripcion}}</p>
									<p class="card-text"><strong>Precio Unitario</strong>&nbsp;$ {{$carrusel->precio}}</p>
									
									<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Agregar al carrito</button>
								</div>
							</div>
							
							<div class="card" style="max-height: 32rem;max-width: 22rem;">
								<img src="{{asset('images/'.$carrusel->imgNombreFisico)}}" alt="{{$carrusel->nombre}}" class="img-top text-center" style="height: 17rem;width: 21.5rem">
								<div class="card-body">
									<h5 class="card-title">{{$carrusel->nombre}}</h5>
									<p class="card-text"><strong>Categoria:</strong>&nbsp;{{$carrusel->getCategoria->nombre}}</p>
									<p class="card-text">{{$carrusel->descripcion}}</p>
									<p class="card-text"><strong>Precio Unitario</strong>&nbsp;$ {{$carrusel->precio}}</p>
									
									<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Agregar al carrito</button>
								</div>
							</div>
	
							<div class="card" style="max-height: 32rem;max-width: 22rem;">
								<img src="{{asset('images/'.$carrusel->imgNombreFisico)}}" alt="{{$carrusel->nombre}}" class="img-top text-center" style="height: 17rem;width: 21.5rem">
								<div class="card-body">
									<h5 class="card-title">{{$carrusel->nombre}}</h5>
									<p class="card-text"><strong>Categoria:</strong>&nbsp;{{$carrusel->getCategoria->nombre}}</p>
									<p class="card-text">{{$carrusel->descripcion}}</p>
									<p class="card-text"><strong>Precio Unitario</strong>&nbsp;$ {{$carrusel->precio}}</p>
									
									<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Agregar al carrito</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif
			@endforeach
			
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!---->
    </body>
</html>