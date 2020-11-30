<footer class="navbar sticky-bottom navbar-expand-sm navbar-dark bg-dark" style="width: 100%; margin-bottom: none;padding-bottom: 3rem; bottom: 0%;">
        <div class="navbar-brand" style="word-wrap: break-word; display: flex; height: 100px; ">
            <img src="{{asset('images/logo.png')}}" alt="" style="height: 100px; width: 170px;padding-left: 1.2rem;" />
            <div class="collapse navbar-collapse text-wrap d-inline-flex">
                <h3 style="padding-left:100px; padding-top: 1.5rem;">¿Te gusta nuestro servicio?</h3>
                <br><br>
            </div>
            <div style="padding-left:120px; padding-top: 60px">
                <button type="button" class="btn text-white d-inline-flex" data-toggle="modal" data-target="#AcercaDe">
                    Acerca de
                </button>
    
                <button style="padding-left:40px;" type="button" class="btn text-white d-inline-flex" data-toggle="modal" data-target="#Politcas_Privacidad">
                    Políticas de Privacidad
                </button>
                <button style="padding-left:40px;" type="button" class="btn text-white d-inline-flex" data-toggle="modal" data-target="#Terminos_Condiciones">
                    Términos y condiciones
                </button>
                <button style="padding-left:40px;" type="button" class="btn text-white d-inline-flex" data-toggle="modal" data-target="#Contactanos">
                    Contáctanos
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
                                @include('layout.footer.acerca_de')
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
                                @include('layout.footer.politicas_privacidad')
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
                                @include('layout.footer.terminos_condiciones')
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
                <!--Contáctanos -->
                <div class="modal fade" id="Contactanos" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title text-body" id="exampleModalLabel">Contáctanos</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body container text-wrap text-body">
                                <h5>Siguenos en nuestras redes sociales</h5>
                                <a href="https://www.facebook.com/joserigoberto.rodriguezmunoz.39">
                                    <img src="{{asset('images/facebook.png')}}" alt="" style="height: 200px; width: 200px;" />
                                </a>          
                                <!--img src="{{asset('images/twitter.png')}}" alt="" style="height: 200px; width: 200px;" /-->
                                <h5>También contamos con correo para contactarnos</h5>
                                <legend>mpshoes901@gmail.com</legend>
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
