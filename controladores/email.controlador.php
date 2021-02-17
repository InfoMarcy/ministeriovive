<?php 

class EmailController {
    static public function ctrEnviar(){
    $ruta = Ruta::ctrRuta();
    if(isset($_POST["infoMensaje"])){
    if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["infoNombre"]) &&
    preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["infoEmail"])){       
 
    date_default_timezone_set("America/Mexico_City");
    $mail = new PHPMailer;
    $mail->isMail();
    $mail->setFrom('ministeriovive@hotmail.com', 'Ministerio Vive A.C');
    $mail->addReplyTo('ministeriovive@hotmail.com', 'Ministerio Vive A.C');
    $mail->Subject = "Subject goes here";
    $mail->addAddress($_POST["infoEmail"]);
    $mail->msgHTML('<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
                        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
                    <style>
                        .btn-verificar {

                            border-radius: 24px;
                            background: linear-gradient(180deg, #1BB6D4 0%, #1BD1D4 44.54%, #71EDD3 100%);
                            color: #FFFFFF;
                            line-height: 60px;
                            text-align: center;
                            width: 60%;
                        }
                    </style>
                    <div style="background:#eee;">
                        <div
                            style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px; padding-top:100px">

                            <div style="position:relative; margin:auto; width:600px; background:white; padding:20px">

                                <center>
                                    <img style="padding:20px; width:35%"
                                        src="http://home.ministeriovive.org.mx/resources/img/plantilla/logo-vive.jpg">

                                    <h3 style="font-weight:100; color:#999">Mensaje de {{nombre}} enviado desde {{email}}</h3>

                                    <hr style="border:1px solid #ccc; width:80%">

                                    <h4 style="font-weight:100; color:#999; padding:0 20px">{{mensaje}}</h4>
                                </center>



                            </div>


                        </div>

                    </div>');

        $envio = $mail->send();

        if(!$envio){
            echo '<script> swal({
                icon:"error",
                text: "Incidencia al enviar su formulario, favor de intentar nuevamente más tarde.",
                button: true,
                button: "Cerrar"
            }).then(function(result){
                if(result.value){
                window.location = "'.$ruta.'inicio#contactenos"
                }
            });
            ;</script>';
        }else {
            echo '<script> swal({
                icon:"success",
                title: "Que tu ayuda Cambie vidas!",
                text: "Gracias por contactarnos, te responderemos a la mayor brevedad posible.",
                button: true,
                button: "Cerrar"
            }).then(function(result){
                if(result.value){
                window.location = "'.$ruta.'inicio"
                }
            });
            ;</script>';
        }
    }else {
        echo '<script> swal({
            icon:"error",
            text: "Incidencia al enviar su formulario, favor de intentar nuevamente más tarde.",
            button: true,
            button: "Cerrar"
        }).then(function(result){
            if(result.value){
            window.location = "'.$ruta.'inicio#contactenos"
            }
        });
        ;</script>'; 
    }
}

}
}