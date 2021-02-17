<?php 

class PaypalController {
        public function ctrHandleApproval(){
            try {
            $ruta = Ruta::ctrRuta();
                //  return redirect()->route('home')->withSuccess(['payment' => "Thanks, {$name}. We received your {$amount}{$currency} payment."]);
                if( isset($_GET["approved"])) {
                // if($amount > 0 ){
                    echo '<script> swal({
                        icon:"success",
                        title: "Que tu ayuda Cambie vidas!",
                        text: "Gracias por tu donación!!!",
                        button: true,
                        button: "Cerrar"
                    }).then(function(result){
                        if(result.value){
                        window.location = "'.$ruta.'inicio"
                        }
                    });
                    ;</script>';
                }

               else {
                        // return redirect()->route('home')->withErrors('We could not capture your payment. Try again, please.');
                        echo '<script> swal({
                            icon:"error",
                            text: "No pudimos obtener tu donación, por favor intentelo nuevamente más tarde!!!",
                            button: true,
                            button: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                            window.location = "'.$ruta.'donar"
                            }
                        });
                        ;</script>';
            }
                   //code...
                } catch (Throwable $th) {
                     // return redirect()->route('home')->withErrors('We could not capture your payment. Try again, please.');
                     echo '<script> swal({
                        icon:"error",
                        text: "No pudimos obtener tu donación, por favor intentelo nuevamente más tarde!!!",
                        button: true,
                        button: "Cerrar"
                    }).then(function(result){
                        if(result.value){
                        window.location = "'.$ruta.'donar"
                        }
                    });
                    ;</script>';
                }
          
        }
}