<!--=====================================
FOOTER
======================================-->

<footer class="container-fluid bg-dark contactenos" id="contactenos">
	
	<div class="container">
		
		<div class="d-flex flex-column-reverse flex-lg-row">			

			<div class="pt-3 pt-lg-5 pr-lg-5 flex-fill">

				<p class="lead text-white text-center text-lg-left">CONTÁCTENOS</p>
				
				<form method="post" onsubmit="return validarContactenos()">

					<div class="form-group">
					
						<input type="text"  name="nombreContactenos" id="nombreContactenos" class="form-control form-control-lg" placeholder="Nombre" required>

					</div>

					<div class="form-group">
						
						<input type="email" name="emailContactenos"  id="emailContactenos" class="form-control form-control-lg" placeholder="Correo electrónico" required>
					</div>

					<div class="form-group">
						
						<textarea  name="mensajeContactenos" id="mensajeContactenos"  class="form-control form-control-lg" rows="3" placeholder="Escribe aquí tu mensaje" required></textarea>

					</div>

					<input type="submit" value="Enviar" class="btn btn-info btn-block btn-lg" >

					<?php 
							 $contactenos = new ControladorPlantilla();
							 $contactenos -> ctrFormularioContactenos();
					?>


				</form>

				<ul class="p-0 m-0 py-4 d-flex justify-content-center">

					<li>
						<a href="https://www.facebook.com/ACMINISTERIOVIVE/" target="_blank"><i class="fab fa-facebook-f lead text-white mx-4"></i></a>
					</li>

					<li>
						<a href="https://www.instagram.com/ministerioviveac/" target="_blank"><i class="fab fa-instagram lead text-white mx-4"></i></a>
					</li>	

					
				    <li>
						<a href="https://mx.linkedin.com/in/mar%C3%ADa-esther-utrilla-sarmiento-0937a323" target="_blank"><i class="fab fa-linkedin lead text-white mx-4"></i></a>
					</li> 

					<li>
						<a href="https://twitter.com/_ministeriovive/" target="_blank"><i class="fab fa-twitter lead text-white mx-4"></i></a>
					</li> 

					<li>
						<a href="https://youtube.com/user/ministeriovive/" target="_blank"><i class="fab fa-youtube lead text-white mx-4"></i></a>
					</li>
	
				</ul>

			</div>

			<div class="pt-lg-5 px-lg-5">

				<div class="p-5 visitanos">
				
					<h1 class="mt-5">VEN Y VISITANOS</h1>
					<p>Ministerio Vive A.C es una Asociación Civil fundada por personas comprometidas con los niños, adultos, mujeres y hombres de colonias marginadas.</p>

					<p>
					<h5 class="m-0 p-0"> Ubicación:</h5>
					C. Tepozán #47<br>
					Col. Valle de los Pinos<br>
                    Santa Mónica, Tlalnepantla<br>
                    Edo. de Méx., C.P.: 54040
					</p>

					<p>
					<h5 class="m-0 p-0"> Horario de atención:</h5>
					Lunes a viernes de 9:00 am a 2:00 pm<br>
					Sábados de 8:00 am a 3:00 pm
					</p>
			
					<p class="pb-lg-5">Email.: ministeriovive@hotmail.com<br>
					Tel.: (55) 5397-1700</p>

				</div>

			</div>

		</div>

	</div>

</footer>