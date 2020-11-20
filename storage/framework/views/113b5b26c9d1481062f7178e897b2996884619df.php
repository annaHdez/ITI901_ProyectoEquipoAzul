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
	<link rel="icon" href="<?php echo e(asset('icons/log.png')); ?>" type="image/x-ico" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('icons/log.ico')); ?>" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container">
                <ul class="navbar-nav mr-auto d-inline">
                    <a href="" class="btn text-white nav-item table table-dark d-inline"><h2><strong>MpShoes</strong></h2></a>
                </ul>     
                <button class="navbar-toggler d-inline" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php if(\Auth::user()->rol_id==1): ?>
                            <ul>
                                <li class="nav-item d-inline" style="margin-right: 2rem;">
                                    <a href="<?php echo e(route('Usuarios.index')); ?>" class="nav-link text-white d-inline">Usuarios</a>
                                </li>
                                <li class="nav-item d-inline" style="margin-right: 2rem;">
                                    <a href="<?php echo e(route('Rol.index')); ?>" class="nav-link text-white d-inline">Roles</a>
                                </li>
                                <li class="nav-item d-inline" style="margin-right: 2rem;">
                                    <a href="<?php echo e(route('Productos.index')); ?>" class="nav-link text-white d-inline">Productos</a>
                                </li>
                                <li class="nav-item d-inline" style="margin-right: 2rem;">
                                    <a href="<?php echo e(route('Categorias.index')); ?>" class="nav-link text-white d-inline">Categorías</a>
                                </li>
                                <li class="nav-item d-inline" style="margin-right: 2rem;">
                                    <a href="<?php echo e(route('Detalle_Venta.index')); ?>" class="nav-link text-white d-inline">Detalle de ventas</a>
                                </li>
                                <li class="nav-item dropdown d-inline" style="margin-right: 5rem;">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white d-inline" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <?php echo e(Auth::user()->name); ?>

                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                <?php echo e(__('Logout')); ?>

                                        </a>
        
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none bg-black">
                                                <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                            
                            <?php else: ?> 
                            <li class="nav-item dropdown d-inline" style="margin-right: 5rem;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white d-inline" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <?php echo e(Auth::user()->name); ?>

                                </a>
                                <div class="dropdown-menu dropdown-menu-right bg-black" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                    </a>
    
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none bg-black">
                                            <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                            <?php endif; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br><br>
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\DAW_ITI901_HernandezRomero\ITI901_ProyectoEquipoAzul\resources\views/layouts/app.blade.php ENDPATH**/ ?>