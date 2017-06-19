<footer class="pbr-footer margin-top-20">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="logo logo-theme margin-top-10 text-left">
                    <a href="{{ url('') }}"><img style="width: 30%;" src="{{ asset('img/logo.svg') }}"></a>
                    <br><a> Horario de Atención:</a>
                    <p> Lunes a Viernes - 8am a 6pm</p>
                    <p> Sabado - 8am a 1pm</p>
                    <p> <a href="{{ url('/terminoscondiciones') }}">Términos y Condiciones.</a></p>
                    <p> <a href="{{ url('/preguntasfrecuentes') }}">Preguntas Frecuentes</a></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <form id="mc4wp-form-1" method="post">
                    <div class="text-left">
                        <h4 class="widget-title">SUSCRIBETE A LINDI</h4>
                        <input id="mc4wp_email" class="form-control suscribe-text" type="text" placeholder="Your Email" />
                        <input class="btn-primary btn" type="button" value="Suscribete" id="sus1" />
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="text-left">
                    <h4>SÍGUENOS</h4>
                    <div class="widget-content">
                        <ul class="social list-unstyled text-left">
                            <li>
                                <a href="#" class="facebook">
                                    <i class="fa fa-facebook "></i> Facebook
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <i class="fa fa-twitter "></i> Twitter
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="pbr-off-canvas" class="pbr-off-canvas sidebar-offcanvas hidden-lg hidden-md"> 
    <div class="pbr-off-canvas-body">
        <div class="offcanvas-head bg-primary">
            <button id="close-menu" type="button" class="btn btn-offcanvas btn-toggle-canvas" data-toggle="offcanvas">
                  <i class="fa fa-close"></i> 
             </button>
             <span>CATEGORIAS</span>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding">
            <div class="menu-mobile">
                <ul class="nopadding">
                    <li class="hearthicarl-items">
                        <a href="https://www.lindi.pe/catalogo/productos/ochobit">8bit Game Power</a>
                        <hr class="hr-menu-mobile">
                        <ul class="nopadding">
                            <li class="hearthicarl-items">
                                <a href="https://www.lindi.pe/catalogo/productos/ochobit/subja">SubJ1</a>
                                <hr class="hr-menu-mobile">
                                <ul class="nopadding">
                                    <li class="hearthicarl-items">
                                        <a href="https://www.lindi.pe/catalogo/productos/ochobit/subja/subbja">Sub2J1</a>
                                        <hr class="hr-menu-mobile">
                                    </li>
                                    <li class="hearthicarl-items">
                                        <a href="https://www.lindi.pe/catalogo/productos/ochobit/subja/subbjb">Sub2J2</a>
                                        <hr class="hr-menu-mobile">
                                    </li>
                                </ul>
                            </li>
                            <li class="hearthicarl-items">
                                <a href="https://www.lindi.pe/catalogo/productos/ochobit/subjb">SubJ2</a>
                                <hr class="hr-menu-mobile">
                            </li>
                        </ul>
                    </li>
                    <li class="hearthicarl-items">
                        <a href="https://www.lindi.pe/catalogo/productos/juegospc">Juegos de PC</a>
                        <hr class="hr-menu-mobile">
                        <ul class="nopadding">
                            <li class="hearthicarl-items">
                                <a href="https://www.lindi.pe/catalogo/productos/juegospc/subboa">Sub2O1</a>
                                <hr class="hr-menu-mobile">
                                <ul class="nopadding">
                                    <li class="hearthicarl-items">
                                        <a href="https://www.lindi.pe/catalogo/productos/juegospc/subboa/subna">SubN1</a>
                                        <hr class="hr-menu-mobile">
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="hearthicarl-items">
                        <a href="https://www.lindi.pe/catalogo/productos/ochenta">80'</a>
                        <hr class="hr-menu-mobile">
                        <ul class="nopadding">
                            <li class="hearthicarl-items">
                                <a href="https://www.lindi.pe/catalogo/productos/ochenta/suboa">SubO1</a>
                                <hr class="hr-menu-mobile">
                            </li>
                            <li class="hearthicarl-items">
                                <a href="https://www.lindi.pe/catalogo/productos/ochenta/subob">SubO2</a>
                                <hr class="hr-menu-mobile">
                                <ul class="nopadding">
                                    <li class="hearthicarl-items">
                                        <a href="https://www.lindi.pe/catalogo/productos/ochenta/subob/subbob">Sub2O2</a>
                                        <hr class="hr-menu-mobile">
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>  
<script type="text/javascript" src="{{ asset('js/babylon.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.js.min') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-timepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/zoom.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/functions.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>