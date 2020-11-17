@extends('layout.header.header')
@section('content')
<div class="container">
    <br>
    <br>
    <strong>
        <h1 class="text-center">Inicia sesión</h1>
    </strong>
    <br>

    <div class='tarjeta'>

    </div>
</div>
<br>
<div class="card d-inline-flex" style="margin-left: 5vw;margin-top: 2vw;margin-bottom:3rem ;width:45%;">
    <div class="card-body d-inline">
        <strong class="text-center">
            <h2>Cliente</h2>
        </strong>
        <form action="../../../Controller/Login/LoginController.php" method="post" enctype="multipart/form-data"
            autocomplete="off">
            <strong>
                <h5><label for="" class="form text-secondary">Correo de Usuario</label></h5>
            </strong>
            <input type="email" class="form-control d-flex justify-content-center" style="width: 70%;" name="email"
                id="email" placeholder="example@example.com" minlength="10" maxlength="40"
                pattern="[a-z0-9._]{5,15}$+@[a-z0-9.-]+.[a-z]{3,}$" required />
            <strong>
                <h5><label for="" class="form text-secondary">Contraseña de Usuario</label></h5>
            </strong>
            <input type="password" class="form-control d-flex justify-content-center" style="width: 70%;"
                name="password" id="password" placeholder="Tu contraseña" pattern="^[A-Za-z][A-Za-z0-9]*$"
                minlength="10" maxlength="20" required />
            <input type="hidden" name="SesionCliente" value="Client" />
            <br>
            <button type="submit" class="btn btn-success btn-lg text-white" name="LoginButton" id="LoginButton"
                value="Iniciar Sesión">Iniciar Sesión</button>
        </form>
        <div class="container text-center" style="margin-top: 1rem;">
            <strong>
                <h4>
                    ¿No tienes cuenta?
                </h4>
            </strong>
            <legend>
                <p class="tex-primary"><a href="Registrar Usuario.html" class="text-decoration-none">Registrate</a>
                </p>
            </legend>
        </div>
    </div>
</div>

<div class="card d-inline-flex" style="margin-bottom: 3rem; margin-left:1rem; width:45%;">
    <div class="card-body">
        <strong class="text-center">
            <h2>Negocio</h2>
        </strong>
        <form action="../../../Controller/Login/BusinessLoginController.php" method="post"
            enctype="multipart/form-data" autocomplete="off">

            <strong>
                <h5><label for="" class="form text-secondary">Código de Negocio</label></h5>
            </strong>
            <input type="text" name="numeroSocio" id="numeroSocio"
                class="form-control d-flex justify-content-center" style="width: 70%;" name="email" id="email"
                placeholder="A1B11C1" minlength="7" maxlength="7" pattern="[A-Za-z0-9]{7,7}$" onchange="a();"
                required />


            <strong>
                <h5><label for="" class="form text-secondary">Contraseña de Negocio</label></h5>
            </strong>
            <input type="password" class="form-control d-flex justify-content-center" style="width: 70%;"
                name="passwordSocio" id="passwordSocio" placeholder="Tu contraseña" pattern="^[A-Za-z][A-Za-z0-9]*$"
                minlength="10" maxlength="20" required />
            <br>
            <button type="submit" class="btn btn-success btn-lg text-white" name="LoginSocioButton"
                id="LoginSocioButton" value="Iniciar Sesión">Iniciar Sesión</button>
        </form>
        <div class="container text-center" style="margin-top: 1rem;">
            <strong>
                <h4>¿No te has registrado como Negocio?</h4>
            </strong>
            <legend>
                <p class="text-primary"><a href="Registrar Usuario.html" class="text-decoration-none">Registrate</a>
                </p>
            </legend>
        </div>
    </div>
</div>
<br>
<!--COPIAR INICIA-->
<footer class="navbar sticky-bottom navbar-expand-sm navbar-dark bg-dark" style="width: 100%;">
    <img src="../Images/imagen1.png" alt="" style="height: 40vh; width: 20vw;" />
    <div class="navbar-brand" style="word-wrap: break-word;height: 10hv; margin-left: 10%">
        <div class="collapse navbar-collapse text-wrap">
            <h3>¿Te gusta nuestro servicio?</h3>
            <br><br>
        </div>
        <div>
            <button type="button" class="btn text-white" data-toggle="modal" data-target="#AcercaDe">
                Acerca de
            </button>

            <button type="button" class="btn text-white" data-toggle="modal" data-target="#Politcas_Privacidad">
                Políticas de Privacidad
            </button>
            <button type="button" class="btn text-white" data-toggle="modal" data-target="#Terminos_Condiciones">
                Términos y condiciones
            </button>

            <!--Acerca de -->
            <div class="modal fade" id="AcercaDe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-body" id="exampleModalLabel">Acerca de</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body container text-wrap text-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Fugiat quasi, enim iure voluptates numquam nulla corrupti maxime voluptatum incidunt
                            recusandae omnis ipsa non quos officia perspiciatis quas. Obcaecati, veritatis quae!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi illum sit mollitia
                            repellat. Cum iure quam, in suscipit soluta quasi maxime voluptatibus aut itaque, nobis
                            libero mollitia animi atque numquam.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <!--Politicas de Privacidad -->
            <div class="modal fade" id="Politcas_Privacidad" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-body" id="exampleModalLabel">Políticas de Privacidad</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body container text-wrap text-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.Fugiat quasi, enim iure
                            voluptates numquam nulla corrupti maxime voluptatum incidunt recusandae omnis ipsa non
                            quos officia perspiciatis quas. Obcaecati, veritatis quae!
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae placeat quo suscipit
                            sint, reiciendis deserunt esse cupiditate delectus quam, tempore eius velit non fugiat
                            aliquam vel atque provident saepe veritatis?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <!--Términos y condiciones -->
            <div class="modal fade" id="Terminos_Condiciones" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-body" id="exampleModalLabel">Términos y Condiciones</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body container text-wrap text-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.Fugiat quasi, enim iure
                            voluptates numquam nulla corrupti maxime voluptatum incidunt recusandae omnis ipsa non
                            quos officia perspiciatis quas. Obcaecati, veritatis quae!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio ipsum modi
                            debitis quod error minus voluptatem expedita temporibus, qui, laborum sint id fugit
                            deleniti molestiae? Deleniti ipsum laborum maxime!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos consectetur itaque
                            laboriosam architecto ipsa totam alias sapiente accusantium sit eos! Ad eligendi
                            expedita excepturi assumenda, nostrum fugit veritatis eos eum?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>
</footer>
</body>

</html>
@endsection