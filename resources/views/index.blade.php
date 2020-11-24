
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
	</div>
	<div class="carousel-caption d-none d-md-block">
						
						<p>La comodidad esta en tus pies, imagina lo mejor en cada paso.</p>
					</div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/1G.jpg')}}" class="d-block w-100" style="height: 80vh;" alt="Second slide">
	</div>
	
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/5G.jpg')}}" class="d-block w-100" style="height: 80vh;" alt="Third slide">
    </div>
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


	<!--Carrusel de Restaurantes destacados-->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<!--3 Destacados 1-->
				<!--Restaurante 1-->
				<div class="container">
					<div class="card-deck">
						<div class="card">
							<img src="../public/images/14.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Coqquet</h5>
								<p class="card-text">Modelo- CQ678</p>
								<p class="card-text">Color- Negro </p>
								<p class="card-text">Punto- 3 al 5</p>
								<p class="card-text">$ 160.00</p>
								
								<a href="Lista Platillos.html" class="btn btn-primary">Añadir al carrito</a>
							</div>
						</div>

						<!--Restaurante 2-->
						<div class="card">
							<img src="../public/images/13.png" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Sandalia primavera</h5>
								<p class="card-text">Modelo - SP123</p>
								<p class="card-text">Color- Animal print </p>
								<p class="card-text">Punto- 3 al 6</p>
								<p class="card-text">$ 250.00</p>
							
								<a href="Lista Platillos.html" class="btn btn-primary">Añadir al carrito</a>
							</div>
						</div>
						<!--Restaurante 3-->
							<div class="card">
								<img src="../public/images/6C1.jpg" class="card-img-top"
									alt="...">
								<div class="card-body">
									<h5 class="card-title">Flats</h5>
									<p class="card-text">Modelo- FS456</p>
									<p class="card-text">Color- Animal print</p>
									<p class="card-text">Punto- 4 al 6</p>
									<p class="card-text">$ 200.00</p>
									
									<a href="Lista Platillos.html" class="btn btn-primary">Añadir al carrito</a>
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
							<img src="../public/images/3G11.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Huarache</h5>
								<p class="card-text">Modelo- VF4621</p>
								<p class="card-text">Color- Mostaza</p>
								<p class="card-text">Punto- 3 al 5</p>
								<p class="card-text">$ 220.00</p>
								
								<a href="Lista Platillos.html" class="btn btn-primary">Añadir al carrito</a>
							</div>
						</div>

						<!--Restaurante 2-->
						<div class="card">
							<img src="../public/images/4G.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Flats amarilla</h5>
								<p class="card-text">Modelo- FA678</p>
								<p class="card-text">Color- Amarillo</p>
								<p class="card-text">Punto- 3 al 6</p>
								<p class="card-text">$ 350.00</p>
								
								<a href="Lista Platillos.html" class="btn btn-primary">Añadir al carrito</a>
							</div>
						</div>
						<!--Restaurante 3-->
							<div class="card">
								<img src="../public/images/11.jpg"
									class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Alpagatas</h5>
									<p class="card-text">Modelo- AS9023</p>
									<p class="card-text">Color- Rosa palo</p>
									<p class="card-text">Punto- 3 al 8</p>
									<p class="card-text">$ 600.00</p>
									
									<a href="Lista Platillos.html" class="btn btn-primary">Añadir al carrito</a>
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
	<!--Comida popular-->
	<div class="container">
		<hr class="d-line text-center">
		<h2 class="d-line text-center">Ofertas </h2>
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
							<img src="../public/images/slider 1.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Valerina moño</h5>
								<p class="card-text">Modelo- VM0023</p>
									<p class="card-text">Color- Negro, Mostaza, Rosa y Rojo </p>
									<p class="card-text">Punto- 4 al 5</p>
									<p class="card-text">$ 110.00</p>
								
								<a href="Info_Platillo.html" class="btn btn-primary">Añadir a carrito</a>
							</div>
						</div>

						<!--Restaurante 2-->
						<div class="card">
							<img src="../public//images/slider 2.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Valerina Diamante</h5>
								<p class="card-text">Modelo- VDS489</p>
									<p class="card-text">Color- Maquillaje,Negro y Plata </p>
									<p class="card-text">Punto- 4 al 6</p>
									<p class="card-text">$ 80.00</p>
									
								<a href="Info_Platillo.html" class="btn btn-primary">Añadir al carrito</a>
							</div>
						</div>
						 <!--Restaurante 3-->
							<div class="card">
								<img src="../public/images/slider 3.jpg" class="card-img-top"
									alt="...">
								<div class="card-body">
									<h5 class="card-title">Huarachin</h5>
									<p class="card-text">Modelo- HN267</p>
									<p class="card-text">Color- Nude,Negro, Mostaza y Rosa palo </p>
									<p class="card-text">Punto- 5</p>
									<p class="card-text">$ 120.00</p>
									
									<a href="Info_Platillo.html" class="btn btn-primary">Añadir a carrito</a>
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
							<img src="../public/images/slider 4.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Bordados</h5>
								<p class="card-text">Modelo- BS4745</p>
								<p class="card-text">Punto- 3 al 6</p>
									<p class="card-text">$ 50.00</p>
									
								<a href="Info_Platillo.html" class="btn btn-primary">Añadir a carrito</a>
							</div>
						</div>

						<!--Restaurante 2-->
						<div class="card">
							<img src="../public/images/slider 5.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Sandalia plataforma</h5>
								<p class="card-text">Modelo- SP792</p>
									<p class="card-text">Color- Mostaza </p>
									<p class="card-text">Punto- 4</p>
									<p class="card-text">$ 145.00</p>
									
								<a href="Info_Platillo.html" class="btn btn-primary">Añadir al carrito</a>
							</div>
						</div>
						< <!--Restaurante 3-->
							<div class="card">
								<img src="../public/images/9.jpg" class="card-img-top"
									alt="...">
								<div class="card-body">
									<h5 class="card-title">Sandalia Diamante</h5>
									<p class="card-text">Modelo- VF4621</p>
									<p class="card-text">Color- Plata </p>
									<p class="card-text">Punto- 4 - 5</p>
									<p class="card-text">$ 100.00</p>
									

									<a href="Info_Platillo.html" class="btn btn-primary">Añadir al carrito</a>
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
        @extends('layout.footer.footer')
	</div>	
    </body>
</html>