<!--=====================================
DISEÑO HERO - CINEMAGRAPH
======================================-->

<div class="container-fluid vistaVideo p-0 m-0">

    <video class="d-none d-lg-block img-fluid filtarImagen" width="100%" height="100%"
        poster="img/ministerio/actividad_1.JPG" id="videoPresentacion" muted="muted" autoplay loop preload="auto">

        <!-- <source data-nite-src="videos/video02.mp4" type="video/mp4"> -->

    </video>

    <div class="filtroVideo"></div>

    <div class="container">

        <h1 class="text-center text-white pb-1 pb-lg-4">Que tu ayuda cambie vidas!</h1>

        <div class="row">

            <div class="col-12 col-lg-4 p-3 p-sm-4" data-toggle="modal" data-target="#modalMinsiterioInfo"
                style="cursor: pointer;">

                <div class="bg-white text-center py-5 px-4">

                    <h4>Ministerio Vive</h4>

                    <p>Institución comprometida en apoyar a los niños y adultos de las colonias marginadas.</p>

                    <i class="fas fa-hand-holding-heart rounded rounded-circle text-white mt-2"
                        style="background:#C1AA92" href="#faq"></i>
                </div>


            </div>


            <div class="col-12 col-lg-4 p-3 p-sm-4" style="cursor: pointer;" data-toggle="modal"
                data-target="#modalLaborSocial">

                <div class="bg-white text-center py-5 px-4">

                    <h4>Labor social</h4>

                    <p>Ofrecemos varias actividades recreativas con las personas de las comunidades desfavorables.</p>

                    <i class="fas fa-graduation-cap rounded rounded-circle text-white mt-2"
                        style="background:#A17A8C"></i>

                </div>

            </div>

            <div class="col-12 col-lg-4 p-3 p-sm-4" data-toggle="modal" data-target="#modalDonaciones"
                style="cursor: pointer;">

                <div class="bg-white text-center py-5 px-4">

                    <h4>Donaciones</h4>

                    <p>Haz tu donativo para apoyar más proyectos y combatir la pobresa infantil.<br class="d-none d-md-block"> <br class="d-none d-md-block"></p>

                    <i class="fas fa-child rounded rounded-circle text-white mt-2" style="background:#A1B287"></i>
                </div>

            </div>

        </div>

        <div class="mx-auto text-center py-3 py-lg-5">

            <a href="<?php echo $ruta; ?>#contactenos" class="btn btn-blanco btn-lg mb-5">Contáctanos y apoya a
                nuestra labor</a>

        </div>

    </div>

</div>





<!-- Inicia Modal -->
<div id="modalMinsiterioInfo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h2 class="modal-title text-center">Únete a la familia de Ministerio Vive</h2>
                <button type="button" class="close float-right" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6 " style="text-align: bottom;">
                        <!-- <img src="img/ministerio/logo-transparente.svg" class="img-fluid mx-auto d-none d-lg-block " /> -->
                        <p class="align-middle text-justify"> <br class="d-none d-lg-block"> <br
                                class="d-none d-lg-block"> <br class="d-none d-lg-block">
                            Somos una Asociación Civil
                            comprometida con los niños,
                            adultos, mujeres, hombres,
                            familias y comunidades de las colonias marginadas de nuestra sociedad.</p>
                        <p class="align-middle text-justify">Nuestra
                            labor
                            social dio inicio en el año de 1999, en una colonia de los suburbios del Estado
                            de
                            México llamada “Clara Córdova”, mejor conocida por “Cartolandia” y en 2004 en el
                            poblado
                            de “Los Jarros“ y seguiremos extendiéndonos.</p>
                    </div>

                    <div class="col-md-6">
                        <img src="img/ministerio/ministerio-vive1.png" class="img-fluid img-thumbnail" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal-->



<!-- Inicia Modal -->
<div id="modalDonaciones" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h2 class="modal-title text-center">Donaciones</h2>

                <button type="button" class="close float-right" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6 ">
                        <p class="align-middle text-justify">Hoy más que nunca necesitamos de tu ayuda, solo así
                            podremos auxiliar a estar comunidades.</p>
                      
                        <p class="align-middle text-justify">
                        <h5 class="m-0 p-0">Apoyo en efectivo:</h5>
                        <i class="fas fa-hand-holding-heart text-danger"></i>
                        Banco SANTANDER<br>
                        -No. de Cuenta: 65501657174<br>
                        -CLABE interbancaria: 014180655016571745
                        </p>
                        <p class="align-middle text-justify">
                        <h5 class="m-0 p-0">Apoyo en especie:</h5>
                        <i class="fas fa-gifts text-warning"></i>
                        ¡Dona artículos para despensa como alimentos enlatados o
                        empaquetados, productos de higiene personal, ropa, juguetes o artículos de limpieza!
                        <br>
                        Tel.: (55) 5397-1700 o mándanos mensaje <br>
                        Email.: ministeriovive@hotmail.com</p>


                        <form action="https://www.paypal.com/donate" method="post" target="_top">
                            <input type="hidden" name="hosted_button_id" value="XBESZWZYSSP66" />
                            <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_donate_LG.gif"
                                style="border:0;" name="submit" title="PayPal - The safer, easier way to pay online!"
                                alt="Donate with PayPal button" class="img-fluid mybutton" />
                            <img alt="" style="border:0;" src="https://www.paypal.com/es_MX/i/scr/pixel.gif" width="1"
                                height="1" class="img-fluid mybutton" />
                        </form>

                        <p class="align-middle text-justify font-weight-bold small">*Emitimos recibos deducibles de impuestos*
                        </p>

                    </div>

                    <div class="col-md-6">
                        <img src="img/ministerio/donativos1.jpg" class="img-fluid img-thumbnail mb-2 w-80" />

                        <p class="align-middle text-justify">
                        <h5 class="m-0 p-0">Apoyo personal:</h5>
                        <i class="fas fa-user-plus text-secondary"></i>
                        Súmate como voluntariado
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal-->


<!-- Inicia Modal -->
<div id="modalLaborSocial" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h2 class="modal-title text-center">Labor Social</h2>
                <button type="button" class="close float-right" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6 " style="text-align: bottom;">
                        <!-- <img src="img/ministerio/logo-transparente.svg" class="img-fluid mx-auto d-none d-lg-block " /> -->
                        <p class="align-middle text-justify">
                            Llévamos a cabo actividades recreativas con niños y adultos que están en condiciones
                            desfavorables.
                        </p>


                        <h5 class="align-middle text-justify">Entre estas tenemos:</h5>
                        <ul>
                            <li class="my-2"><i class="fas fa-child text-danger"></i> Actividades para el desarrollo de
                                la atención, concentración y motricidad de los
                                niños</li>

                            <li class="my-2"><i class="fas fa-book-reader text-info"></i> Actividades relacionadas a
                                mejorar la comprensión lectora</li>

                            <li class="my-2"><i class="far fa-futbol text-primary"></i> Juegos al aire libre</li>
                            <li class="my-2"><i class="fas fa-cloud-sun text-warning"></i></i> y muchas más actividades.
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <img src="img/ministerio/laborSocial.JPG" class="img-fluid img-thumbnail" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal-->