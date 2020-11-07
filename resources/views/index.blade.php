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

            <nav class="navbar navbar-dark bg-dark fixed-top" style="height: 10.5vh; width: 100%; opacity: 1;" >
            <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">                
                <ul class="navbar-nav mr-auto">
                    <a href="index.html" class="btn text-white nav-item table table-dark">
                        <h2><strong>MpShoes</strong></h2>
                    </a>
                </ul>     
                <ul class="navbar-nav mr-auto" style="margin-left: -67%;">
                    <img src="{{asset('icons/log.png')}}" alt="" style="width: 60px; height: 60px; padding-bottom: 10px ">
                </ul>                             
                @guest
                    <ul class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Acceder') }}</a>
                    </ul>
                    @if (Route::has('register'))
                        <ul class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}" >{{ __('Registrarse') }}</a>
                        </ul>
                    @endif         
                    
               <!-- <form class="form-inline my-2 my-lg-0">
                    <a href="{{URL::to('Login')}}" type="button" class="btn btn-outline-success my-2 my-sm-0 text-success"
                            type="submit" style="margin-left: 15px">Ingresar</a>
                    </form>-->

                <!-- <ul>
                   <div class="container" style="text-align:center;padding:1em 0;font-size: 0.5em;">
                        <div class="d-line">
                            <h4>
                                <p class style="text-decoration:none;" href="">
                                    <span style="color:gray;">Hora actual en</span>
                                    <br />
                                <p class="text-light">León, Guanajuato, México</p>
                                </p>
                            </h4>
                        </div>
                        <div class="d-inline">
                            <iframe class="d-inline"
                                src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FMexico_City"
                                width="100%" height="90" frameborder="0" seamless></iframe> </div>
                    </div>                     
                </ul> -->  
                @endguest             
            </nav>
        </div>
	<div style="margin-top: 19vh;">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="../images/stand.jpg" class="d-block w-100" style="height: 80vh;" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="../Images/breakfast-690128_1280.jpg" class="d-block w-100" style="height: 80vh;"
						alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="../Images/architecture-1837150_1280.jpg" class="d-block w-100" style="height: 80vh;"
						alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
					</div>
				</div>
			</div>
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

	<br>
	<div class="container">
		<div class="">
			<strong class="d-block text-center">
				<h2>Lorem ipsum</h2>
			</strong>
			<br>
			<p class="text-justify ">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore possimus, minima vero, iure blanditiis
				aperiam necessitatibus sunt error beatae ex consectetur quod temporibus distinctio non. Recusandae velit
				aut, eius natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab suscipit tempora fugit
				possimus excepturi molestiae veniam in. Soluta id, labore explicabo enim magnam consequatur itaque natus
				deleniti at nemo? Facere.
			</p>
		</div>
	</div>
	<hr>

	<br>
	<div class="row">
		<div class="col text-center">
			<hr class="d-inline p-2">
			<h2 class="text-muted d-inline p-2">Restaurantes destacados</h2>
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
							<img src="../Images/Destacados/Restaurantes/bistro-498504_640.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Restaurante 1</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								<a href="Lista Platillos.html" class="btn btn-primary">Conocer</a>
							</div>
						</div>

						<!--Restaurante 2-->
						<div class="card">
							<img src="../Images/Destacados/Restaurantes/brick-wall-1834784_640.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Restaurante 2</h5>
								<p class="card-text">This card has supporting text below as a natural lead-in to
									additional content.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								<a href="Lista Platillos.html" class="btn btn-primary">Conocer</a>
							</div>
						</div>
						< <!--Restaurante 3-->
							<div class="card">
								<img src="../Images/Destacados/Restaurantes/cafe-789635_640.jpg" class="card-img-top"
									alt="...">
								<div class="card-body">
									<h5 class="card-title">Restaurante 3</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural
										lead-in to additional content. This card has even longer content than the first
										to show that equal height action.</p>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									<a href="Lista Platillos.html" class="btn btn-primary">Conocer</a>
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
							<img src="../Images/Destacados/Restaurantes/croatia-1578437_640.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Restaurante 4</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								<a href="Lista Platillos.html" class="btn btn-primary">Conocer</a>
							</div>
						</div>

						<!--Restaurante 2-->
						<div class="card">
							<img src="../Images/Destacados/Restaurantes/restaurant-1090136_640.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Restaurante 5</h5>
								<p class="card-text">This card has supporting text below as a natural lead-in to
									additional content.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								<a href="Lista Platillos.html" class="btn btn-primary">Conocer</a>
							</div>
						</div>
						< <!--Restaurante 3-->
							<div class="card">
								<img src="../Images/Destacados/Restaurantes/restaurant-3597677_640.jpg"
									class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Restaurante 6</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural
										lead-in to additional content. This card has even longer content than the first
										to show that equal height action.</p>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									<a href="Lista Platillos.html" class="btn btn-primary">Conocer</a>
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
							<img src="../Images/Destacados/Restaurantes/restaurant-690569_640.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Restaurante 7</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								<a href="Lista Platillos.html" class="btn btn-primary">Conocer</a>
							</div>
						</div>

						<!--Restaurante 2-->
						<div class="card">
							<img src="../Images/Destacados/Restaurantes/table-791167_640.jpg" style="height: 240px;"
								clrestaurant-690569_640ass="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Restaurante 8</h5>
								<p class="card-text">This card has supporting text below as a natural lead-in to
									additional content.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								<a href="Lista Platillos.html" class="btn btn-primary">Conocer</a>
							</div>
						</div>
						< <!--Restaurante 3-->
							<div class="card">
								<img src="../Images/Destacados/Restaurantes/urban-2004494_640.jpg" class="card-img-top"
									alt="...">
								<div class="card-body">
									<h5 class="card-title">Restaurante 9</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural
										lead-in to additional content. This card has even longer content than the first
										to show that equal height action.</p>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									<a href="Lista Platillos.html" class="btn btn-primary">Conocer</a>
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
		<h1 class="text-center">Lorem ipsum</h1>
		<p class="text-justify">
			Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste placeat nemo impedit a blanditiis tempora
			facere possimus, sint repellat quae et dolores quaerat natus fugit doloribus tenetur minima doloremque quam!
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dolores adipisci sequi odit placeat! Aliquam
			ipsam aliquid alias quo nisi officia doloremque. Odio ab quidem deleniti quis facere eveniet architecto.
			<br><br>
			<small class="d-flex" style="float: right;">Lorem ipsum</small>
		</p>
	</div>
	<!--Comida popular-->
	<div class="container">
		<hr class="d-line text-center">
		<h2 class="d-line text-center">Comida Popular</h2>
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
							<img src="../Images/Destacados/Comida/asparagus-2169305_640.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								<a href="Info_Platillo.html" class="btn btn-primary">Leer más</a>
							</div>
						</div>

						<!--Restaurante 2-->
						<div class="card">
							<img src="../Images/Destacados/Comida/burger-1140824_640.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This card has supporting text below as a natural lead-in to
									additional content.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								<a href="Info_Platillo.html" class="btn btn-primary">Leer más</a>
							</div>
						</div>
						< <!--Restaurante 3-->
							<div class="card">
								<img src="../Images/Destacados/Comida/cake-1971552_640.jpg" class="card-img-top"
									alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural
										lead-in to additional content. This card has even longer content than the first
										to show that equal height action.</p>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									<a href="Info_Platillo.html" class="btn btn-primary">Leer más</a>
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
							<img src="../Images/Destacados/Comida/churros-2188871_640.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								<a href="Info_Platillo.html" class="btn btn-primary">Leer más</a>
							</div>
						</div>

						<!--Restaurante 2-->
						<div class="card">
							<img src="../Images/Destacados/Comida/hamburger-494706_640.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This card has supporting text below as a natural lead-in to
									additional content.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								<a href="Info_Platillo.html" class="btn btn-primary">Leer más</a>
							</div>
						</div>
						< <!--Restaurante 3-->
							<div class="card">
								<img src="../Images/Destacados/Comida/mexican-2456038_640.jpg" class="card-img-top"
									alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural
										lead-in to additional content. This card has even longer content than the first
										to show that equal height action.</p>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									<a href="Info_Platillo.html" class="btn btn-primary">Leer más</a>
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
							<img src="../Images/Destacados/Comida/pancakes-2291908_640.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								<a href="Info_Platillo.html" class="btn btn-primary">Leer más</a>
							</div>
						</div>

						<!--Restaurante 2-->
						<div class="card">
							<img src="../Images/Destacados/Comida/piza-3010062_640.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This card has supporting text below as a natural lead-in to
									additional content.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								<a href="Info_Platillo.html" class="btn btn-primary">Leer más</a>
							</div>
						</div>
						< <!--Restaurante 3-->
							<div class="card">
								<img src="../Images/Destacados/Comida/shish-kebab-417994_640.jpg" class="card-img-top"
									alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural
										lead-in to additional content. This card has even longer content than the first
										to show that equal height action.</p>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									<a href="Info_Platillo.html" class="btn btn-primary">Leer más</a>
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
