<!--=====================================
HEADER
======================================-->

<header>

    <div class="container-fluid">

        <div class="container p-0">

            <div class="row">

                <!-- LOGO -->

                <div class="col-7 col-sm-5 col-md-4 col-lg-2 col-xl-3 my-3 d-flex mt-lg-3 logotipo">

                    <i class="fas fa-bars d-block d-lg-none text-white pt-2 pr-2"></i>

                    <a href="<?php echo $ruta; ?>inicio">
                        <img data-nite-src="img/ministerio/logo.png" class="img-fluid pt-1">
                    </a>

                </div>

                <!-- BOTONERA -->

                <div class="d-none d-lg-block col-lg-8 col-xl-6 p-0 pt-lg-2 mt-lg-1 pt-xl-4 botonera">

                    <ul class="nav justify-content-lg-left justify-content-xl-end">

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#cursos">Cursos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#nosotros">Nosotros</a>
                        </li>

                        <!-- <li class="nav-item">
							<a class="nav-link text-white" href="#testimonios">Testimonios</a>
						</li> -->

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#testimonios">Eventos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#faq">¿Quiénes somos?</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#contactenos">Contáctenos</a>
                        </li>

                    </ul>

                </div>

                <!-- IDIOMA E INGRESO -->

                <div class="col-5 col-sm-7 col-md-8 col-lg-2 col-xl-3 p-0 pt-4 pt-lg-2 mt-lg-1 pt-xl-4">

                    <!-- IDIOMA -->

                    <!-- <div class="ml-xl-4 float-left mt-lg-1 d-none d-lg-block">

						<div class="dropdown">

							<button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown">
							ES
							</button>

							<div class="dropdown-menu">

								<a class="dropdown-item" href="#">EN</a>

							</div>

						</div>

					</div> -->

                    <!-- INGRESO -->

                    <!-- <div class="mr-2 mr-lg-0 float-right pt-1 ingresos"> -->

                    <!-- <button class="btn d-block  mainButton text-uppercase btn-sm d-flex"> -->

                    <!-- <a href="<?php // echo $ruta;?>ingreso" class="text-white">Ingresar</a> -->

                    <!-- <span class="text-white mx-2 .-none d-lg-block">|</span>

							<a href="<?php //echo Ruta::ctrRuta();?>index.php?pagina=registro" class="text-white d-none d-lg-block">Crear Cuenta</a>  -->


                    <!-- <span class="text-white mx-2">|</span> -->

                    <!-- <a href="<?php //echo Ruta::ctrRuta();?>index.php?pagina=donar"
                                class="text-white">contribuir</a> -->

                    <!-- </button> -->

                    <div class="float-right" text-center>
                        <form action="https://www.paypal.com/donate" method="post" target="_top">
                            <input type="hidden" name="hosted_button_id" value="XBESZWZYSSP66" />
                            <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_donate_LG.gif"
                            style="border:0;" name="submit" title="PayPal - The safer, easier way to pay online!"
                                alt="Donate with PayPal button" class="img-fluid mybutton" />
                            <img alt="" style="border:0;"src="https://www.paypal.com/es_MX/i/scr/pixel.gif" width="1"
                                height="1" class="img-fluid mybutton" />
                        </form>


                    </div>

                </div>

            </div>

        </div>

    </div>

</header>