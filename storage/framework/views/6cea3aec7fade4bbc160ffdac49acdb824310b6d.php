

<!DOCTYPE html>    
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <!--<?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 underline">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 underline">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>-->

            <nav class="navbar navbar-dark bg-dark fixed-top" style="height: 10.5vh; width:100%; opacity: 1;" >
            <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">                
                <ul class="navbar-nav mr-auto">
                    <a href="" class="btn text-white nav-item table table-dark">
                        <h2><strong>MpShoes</strong></h2>
                    </a>
                </ul>     
                <ul class="navbar-nav mr-auto" style="margin-left: -82%;">
                    <img src="<?php echo e(asset('icons/logo1.png')); ?>" alt="logo" style="width: 100px; height: 100px; padding-bottom: 30px; ">
                </ul>                             
                <?php if(auth()->guard()->guest()): ?>
                    <ul class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Acceder')); ?></a>
                    </ul>
                    <?php if(Route::has('register')): ?>
                        <ul class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>" ><?php echo e(__('Registrarse')); ?></a>
                        </ul>
                    <?php endif; ?>         
                <?php endif; ?>             
            </nav>
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
					<img src="<?php echo e(asset('images/stand.jpg')); ?>" class="d-block w-100" style="height: 80vh;" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="../public/images/rojo.jpg" class="d-block w-100" style="height: 80vh;"
						alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="../public/images/amarillo.jpg" class="d-block w-100" style="height: 80vh;"
						alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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
			<h2 class="text-muted d-inline p-2">Productos destacados</h2>
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
							<img src="../public/images/camping.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Botas para acampar</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<a href="Lista Platillos.html" class="btn btn-primary">Conocer</a>
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
								<a href="Lista Platillos.html" class="btn btn-primary">Conocer</a>
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
							<img src="../public/images/cafe.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Zapatos casuales</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<a href="Lista Platillos.html" class="btn btn-primary">Conocer</a>
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
								<a href="Lista Platillos.html" class="btn btn-primary">Conocer</a>
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
								<a href="Info_Platillo.html" class="btn btn-primary">Leer más</a>
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
								<a href="Info_Platillo.html" class="btn btn-primary">Leer más</a>
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
							<img src="../public/images/top4.jpg" class="card-img-top"
								alt="...">
							<div class="card-body">
								<h5 class="card-title">Top 4</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<a href="Info_Platillo.html" class="btn btn-primary">Leer más</a>
							</div>
						</div>

						<!--Restaurante 2-->
						<div class="card">
							<img src="../public/images/top5.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Top 5</h5>
								<p class="card-text">This card has supporting text below as a natural lead-in to
									additional content.</p>
								<a href="Info_Platillo.html" class="btn btn-primary">Leer más</a>
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
        
	</div>	
    </body>
</html>
<?php echo $__env->make('layout.footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DAW_ITI901_HernandezRomero\ITI901_ProyectoEquipoAzul\resources\views/index.blade.php ENDPATH**/ ?>