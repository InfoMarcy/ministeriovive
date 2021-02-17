<div class="ladoUsuarios">
    <div class="container-fluid ">

        <div class="row">

            <div class="col-12 col-lg-4 formulario">

                <figure class="p-2 p-sm-5 p-lg-4 p-xl-5 text-center">

                    <a href="<?php echo $ruta; ?>inicio"><img
                            src="<?php echo Ruta::ctrRuta();?>resources/img/plantilla/logo-vive.jpg"
                            class="img-fluid"></a>

                    <!-- <form class="mt-5" method="post"> -->
                    <!-- 
                    <div class="d-flex justify-content-between">

                        <h4>Donaciones</h4>

                    </div>

                    <p class="text-center">Haz tu donativo para apoyar más proyectos y combatir la pobresa infantil. -->
                    <!-- </p>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text my-2 py-2">MXN</div>
                        </div>
                        <input type="number" class="form-control my-2 py-2" id="inlineFormInputGroup"
                            name="paypalAmount" placeholder="MONTO" required>
                    </div> -->

                    <?php 
                        $paypal = new PaypalController();
                        $paypal->ctrHandleApproval();
                        ?>

                    <!-- <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="<?php echo Ruta::ctrRuta();?>resources/img/plantilla/paypal.jpg"
                                        class="img-fluid"></div>
                            </div>
                            <input type="submit" class="form-control btn btn-info" value="DONAR">
                        </div>

                        <a class="btn btn-warning mt-3" href="<?php echo $ruta; ?>inicio">Volver al Inicio</a> -->

                    <!-- </form> -->


                    <form action="https://www.paypal.com/donate" method="post" target="_top" class="mt-5 py-3" method="post">

                        <div class="d-flex justify-content-between">

                            <h4>Donaciones</h4>

                        </div>

                        <p class="text-center my-3">Haz tu donativo para apoyar más proyectos y combatir la pobresa
                            infantil.</p>

                
                            <input type="hidden" name="hosted_button_id" value="XBESZWZYSSP66" />
                            <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_donate_LG.gif"
                            style="border:0;" name="submit" title="PayPal - The safer, easier way to pay online!"
                                alt="Donate with PayPal button" class="img-fluid mybutton" />
                            <img alt="" style="border:0;"src="https://www.paypal.com/es_MX/i/scr/pixel.gif" width="1"
                                height="1" class="img-fluid mybutton" />
                        </form>



                        <a  class="btn btn-warning rounded" href="<?php echo $ruta; ?>inicio">Volver al Inicio</a> 



                </figure>




            </div>


            <div class="col-12 col-lg-8 fotoIngreso text-center d-none d-lg-block">

                <a href="<?php echo $ruta; ?>inicio"><button
                        class="d-none d-lg-block text-center btn btn-default btn-lg my-3 text-white btnRegresar">Regresar</button></a>

                <a href="<?php echo $ruta; ?>inicio"><button
                        class="d-block d-lg-none text-center btn btn-default btn-lg btn-block my-3 text-white btnRegresarMovil">Regresar</button></a>

                <ul class="p-0 m-0 py-4 d-flex justify-content-center redesSociales">

                    <li>
                        <a href="#" target="_blank"><i class="fab fa-facebook-f lead text-white mx-4"></i></a>
                    </li>

                    <li>
                        <a href="#" target="_blank"><i class="fab fa-instagram lead text-white mx-4"></i></a>
                    </li>


                    <li>
                        <a href="#" target="_blank"><i class="fab fa-linkedin lead text-white mx-4"></i></a>
                    </li>

                    <li>
                        <a href="#" target="_blank"><i class="fab fa-twitter lead text-white mx-4"></i></a>
                    </li>

                    <li>
                        <a href="#" target="_blank"><i class="fab fa-youtube lead text-white mx-4"></i></a>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>