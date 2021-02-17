<?php 

class ControladorPlantilla{

    public function ctrPlantilla(){
        include "vistas/plantilla.php";
    }

     /*=============================================
	FORMULARIO CONTACTENOS
	=============================================*/

	public function ctrFormularioContactenos(){

		if(isset($_POST["mensajeContactenos"])){

			if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nombreContactenos"]) &&
			 preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["emailContactenos"]) &&
			   preg_match('/^[?\\¿\\!\\¡\\:\\,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["mensajeContactenos"])
			 ){

				/*=============================================
				ENVÍO CORREO ELECTRÓNICO CON PHP
				=============================================*/
				// The message
				$message = "Line 1\r\nLine 2\r\nLine 3";

				// In case any of our lines are larger than 70 characters, we should use wordwrap()
				$message = wordwrap($message, 70, "\r\n");

				// Send
				mail('caffeinated@example.com', 'My Subject', $message);


				date_default_timezone_set("America/Mexico_City");

				$mail = new PHPMailer;

				$mail->CharSet = 'UTF-8';

				$mail->isMail();

				$mail->setFrom('info@ministeriovive.org', 'Ministerio Vive');

				$mail->addReplyTo($_POST["emailContactenos"], $_POST["nombreContactenos"]);

				$mail->Subject = "Ha recibido una consulta";

				$mail->addAddress($_POST["emailContactenos"]);

				$mail->msgHTML('<div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px; padding-top:100px">

				<div style="position:relative; margin:auto; width:600px; background:white; padding:20px">
					
					<center>
			
						<img style="padding:20px; width:50%" src="http://ministeriovive.newsoftec.com/resources/img/plantilla/logo-vive.jpg">
					 
						<h3 style="font-weight:100; color:#999;">HA RECIBIDO UNA CONSULTA</h3>
			
						<hr style="width:80%; border:1px solid #ccc">
			
						<h4 style="font-weight:100; color:#999; padding:0px 20px; text-transform:uppercase">'.$_POST["nombreContactenos"].'</h4>
						<h4 style="font-weight:100; color:#999; padding:0px 20px;">De: '.$_POST["emailContactenos"].'</h4>
						<h4 style="font-weight:100; color:#999; padding:0px 20px">'.$_POST["mensajeContactenos"].'</h4>
			
						<hr style="width:80%; border:1px solid #ccc">
			
					</center>
			
				</div>
			
			</div>');

				$envio = $mail->Send();

				if(!$envio){

					echo '<script> 

							swal({
								  	icon:"error",
								  	title: "¡ERROR!",
								  	text: "¡Ha ocurrido un problema enviando el mensaje!",							 
							 		showConfirmButton: true,
									button: "Cerrar"
								
								}).then(function(result){

									if(result.value){
										history.back();
									}
							});

						</script>';


				}else{

					echo '<script> 

							swal({
								 	icon: "success",
							  		title: "¡OK!",
							  		text: "¡Su mensaje ha sido enviado, muy pronto le responderemos!",					 
									showConfirmButton: true,
									confirmButtonText: "Cerrar"
								
								}).then(function(result){

									if(result.value){
										history.back();
									}
							});


						</script>';

				}


			}else{

				echo '<script>

					swal({
						    icon:"error",
							title: "¡ERROR!",
						  	text: "¡Problemas al enviar el mensaje, revise que no tenga caracteres especiales!",
							showConfirmButton: true,
							button: "Cerrar"
						
						}).then(function(result){

							if(result.value){
								history.back();
							}
					});

				</script>';

			}

		}

	}

}