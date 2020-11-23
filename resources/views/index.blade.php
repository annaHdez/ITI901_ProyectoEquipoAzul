@extends('layout.header.header')

<!DOCTYPE html>    
	@include('layouts.html.alertify')
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

            
        </div>
	<div style="margin-top: 10vh;">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{asset('images/stand.jpg')}}" class="d-block w-100" style="height: 80vh;" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Bienvenido</h5>
						<p>Esperamos que obtenga la mejor experiencia en su compra.</p>
					</div>
				</div>
				@foreach($table_producto as $producto)
					@if(($producto->estatus==1)&&($producto->stock>0))
						<div class="carousel-item">
							<img src="{{asset('images/'.$producto->nombre_fisico)}}" class="d-block w-100" style="height: 80vh;" alt="{{$producto->nombre}}">
								<div class="carousel-caption d-none d-md-block" style="background-color: darkgrey">
									<h4>{{$producto->nombre}}</h4>
									<strong><label class="text-dark">{{$producto->descripcion}}</label></strong>
								</div>
						</div>
					@else 
						<div class="carousel-item" style="background-color: darkgrey">
							<div src="" class="d-block w-100" style="height: 80vh;" alt="" style="background-color: darkgrey"></div>
							<div class="carousel-caption d-none d-md-block">
								<strong><h1 class="position-absolute text-danger" style="transform: rotate(0deg)">No hay productos disponibles por el momento</h1></strong>
								<br>
							</div>
						</div>
					@endif
				@endforeach

				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>

	<br>
	<div class="container">
		<div class="">
			<strong class="d-block text-center">
				<h2>Productos Destacado</h2>
			</strong>
			<br>
			<p class="text-justify ">
				Los productos que se muestran a continuación se han destacado por su calidad. Además,
				de ser los mejor recibidos por nuestros clientes, con ello, aseguramos que su compra
				sea una experiencia inigualable y sorprendente que lo hará sentirse especial.
			</p>
		</div>
	</div>
	<hr>

	<br>
	<div class="row">
		<div class="col text-center">
			<hr class="d-inline p-2">
			<h2 class="text-muted d-inline p-2">Productos destacados</h2>
			<hr class="d-inline p-2">
		</div>
	</div>
	<br>


	<!--Carrusel de Productos destacados-->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<!--3 Destacados 1-->
				<!--Restaurante 1-->
				<div class="container">
					<div class="card-deck">
						<div class="card">
							<img src="../public/images/camping.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Botas para acampar</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Leer más</button>
							</div>
						</div>

						<!--Restaurante 2-->
						<div class="card">
							<img src="../public/images/brown.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Botas casuales</h5>
								<p class="card-text">This card has supporting text below as a natural lead-in to
									additional content.</p>
								<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Leer más</button>
							</div>
						</div>
						<!--Restaurante 3-->
							<div class="card">
								<img src="../public/images/trabajo.jpg" class="card-img-top"
									alt="...">
								<div class="card-body">
									<h5 class="card-title">Botas de trabajo</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural
										lead-in to additional content. This card has even longer content than the first
										to show that equal height action.</p>
									<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Leer más</button>
								</div>
							</div>

					</div>
				</div>
			</div>

			<div class="carousel-item">
				<!--3 Destacados 2-->
				<div class="container">
					<div class="card-deck">
						<div class="card">
							<img src="../public/images/cafe.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Zapatos casuales</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Leer más</button>
							</div>
						</div>

						<!--Restaurante 2-->
						<div class="card">
							<img src="../public/images/tenis.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Tenis</h5>
								<p class="card-text">This card has supporting text below as a natural lead-in to
									additional content.</p>
								<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Leer más</button>
							</div>
						</div>
						<!--Restaurante 3-->
							<div class="card">
								<img src="../public/images/heels.jpg"
									class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Zapatos de tacón</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural
										lead-in to additional content. This card has even longer content than the first
										to show that equal height action.</p>
									<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Leer más</button>
								</div>
							</div>

					</div>
				</div>
			</div>
			
		</div>
		<a class="carousel-control-prev text-dark" href="#carouselExampleControls" role="button" data-slide="prev" >
			<span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
			<span class="sr-only text-dark">Previous</span>
		</a>
		<a class="carousel-control-next text-dark" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
			<span class="sr-only text-dark">Next</span>
		</a>
	</div>
	<!---->
	<br>
	<div class="container">
		<h1 class="text-center">Los más vendidos.</h1>
		<p class="text-justify">
			Nuestros productos se destacan por ser uno de los más aclamados por los usuarios, si no 
			lo cree compre un par y compruebe su experiencia de compra. Los productos a continuación
			se destacan por ser los más vendidos por nuestra plataforma.
		</p>
	</div>
	<!--Productos populares-->
	<div class="container">
		<hr class="d-line text-center">
		<h2 class="d-line text-center">Los más vendidos</h2>
		<hr class="d-line text-center">
	</div>
	<!---->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<!--3 Destacados 1-->
				<!--Restaurante 1-->
				<div class="container">
					<div class="card-deck">
						<div class="card">
							<img src="../public/images/top1.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Top 1</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Leer más</button>
							</div>
						</div>

						<!--Restaurante 2-->
						<div class="card">
							<img src="../public//images/top2.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Top 2</h5>
								<p class="card-text">This card has supporting text below as a natural lead-in to
									additional content.</p>
								<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Leer más</button>
							</div>
						</div>
						 <!--Restaurante 3-->
							<div class="card">
								<img src="../public/images/top3.jpg" class="card-img-top"
									alt="...">
								<div class="card-body">
									<h5 class="card-title">Top 3</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural
										lead-in to additional content. This card has even longer content than the first
										to show that equal height action.</p>

									<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Leer más</button>
								</div>
							</div>

					</div>
				</div>
			</div>								
			<div class="carousel-item">
				<!--3 Destacados 3-->
				<div class="container">
					<div class="card-deck">
						<div class="card">
							<img src="../public/images/top4.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Top 4</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
									<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Leer más</button>
							</div>
						</div>

						<!--Restaurante 2-->
						<div class="card">
							<img src="../public/images/top5.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Top alertify</h5>
								<p class="card-text">This card has supporting text below as a natural lead-in to
									additional content.</p>
									<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Leer más</button>
							</div>
						</div>
						< <!--Restaurante 3-->
							<div class="card">
								<img src="../public/images/top6.jpg" class="card-img-top"
									alt="...">
								<div class="card-body">
									<h5 class="card-title">Top 6</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural
										lead-in to additional content. This card has even longer content than the first
										to show that equal height action.</p>

									<button class="btn btn-primary" onclick="alertify.alert('Aviso','Debes de iniciar sesión primero');">Leer más</button>
								</div>
							</div>

					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<br>
        @extends('layout.footer.footer')
	</div>	
    </body>
</html>