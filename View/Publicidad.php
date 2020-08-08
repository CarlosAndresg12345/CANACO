<?php
session_start();
$User = null; 
if(isset($_SESSION['usuario'])){
    $User = $_SESSION['usuario'];
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Iniciar sesion</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <style>
			input#search{
  			background-color: transparent;
  			color: white;
 			 border-color: transparent;

			}
			#logo{
				width: 300px;
				height: 300px;
			}
			
		</style>
		<link rel="stylesheet" href="assets/css/carrusel.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

		<!-- Header -->
		<section id="header" class="wrapper">
		<!-- Logo -->
		<div id="logo">
			<img src="images/Canaco.png" alt="logotipo">
		</div>

	
		
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.php">Inicio</a></li>
							<li class="current" ><a href="Promociones.php">Promociones</a></li>
							<li><a href="Eventos.php">Eventos</a></li>
							<li class="current"><a href="#">Guadalajara</a>
								<ul>
									<li><a href="CentroHistorico.php">Centro Historico</a></li>
									<li><a href="CatedralGuadalajara.php">Catedral de Guadalajara</a></li>
									<li><a href="RotondaJalisciences.php">Rotonda de los jalisciences ilustres</a></li>
									<li><a href="TeatroDegollado.php">Teatro Degollado</a></li>
									<li><a href="#">San Juan de Dios</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Sitios</a>
								<ul>
									<li><a href="Turisticos.php">Turisticos</a></li>
									
									<li><a href="Culturales.php">Culturales</a></li>
									<li>
										<a href="#">Comercios</a>
										<ul>
											<li><a href="Restaurantes.php">Restaurantes</a></li>
											<li><a href="#">Souvenirs</a></li>
											<li><a href="#">Ropa</a></li>
										</ul>
									</li>
									<li><a href="#">Historicos</a></li>
								</ul>
							</li>
								
								<?php
								
								session_start();
								$TipoDeUsuario = "";
								
								if($_SESSION['usuario'] != null || $_SESSION['Socio']  != null){
									$user = $_SESSION['usuario'];
									$Socio = $_SESSION['Socio'];
									if($_SESSION['tipodeusuario'] != null){
										$TipoDeUsuario = "Administrador";
									}
								}
								
								if($user == null ){
									echo '	<li><a href="Login.php">Inicia sesion</a></li>';
								}else if($Socio == true){
                                   
									if($TipoDeUsuario == "Administrador"){
											echo '<li  class="current" > <a href="#" >Usuario: '.$user.'</a>
												  <ul>		
												  
												  <li><a class="current" href="ControlDeSocios.php">Control de socios</a></li>	
												  <li><a class="current" href="ControlDeNoSocios.php">Control de no socios </a></li>									  
									     	      <li><a class="current" href="Publicidad.php">Subir Publicidad</a></li>
								   				  <li><a class="current" href="SubirEvento.php">Subir Evento</a></li>											  
											  	  <li><a class="current" href="Configuracion.php">Configuracion</a></li>
												  <li><a class="current" href="SessionDestroy.php">Cerrar sesión</a></li>
											    </ul>
										    </li>';

									}else{
									
										echo '<li  class="current" > <a href="#" >Usuario: '.$user.'</a>
										<ul>
										<li><a class="current" href="Publicidad.php">Subir Publicidad</a></li>
										<li><a class="current" href="SubirEvento.php">Subir Evento</a></li>											  
										 <li><a class="current" href="Configuracion.php">Configuracion</a></li>
										 <li><a class="current" href="SessionDestroy.php">Cerrar sesión</a></li></ul>
									 </li>';
										}
								
								}else{
									echo '<li  class="current" > <a  >Usuario: '.$user.'</a>
										  <ul>
											  <li><a class="current" href="SessionDestroy.php">Cerrar sesión</a></li>
										  </ul>
										  </li>';
									
									
								}?>
								<li> <input type="search" id="search" placeholder="Search..." /></li>
							</ul>
						</nav>
				</section>
			<!-- Main -->
							

			<!-- Footer -->
				<section id="intro" class="wrapper style1">
					<div class="title">Subir Publicidad </div>
					<div class="container">
						<header class="style1">
							<h2>Pormociona tu producto</h2>


							<form method="post" action="../Controller/DataPublicidad.php"  enctype="multipart/form-data" name="FormUser">
								<div class="row gtr-50">

								

                                    <input type="hidden" value="<?php echo $_SESSION['usuario'];?>" name="usuario">
                                    <div class="col-6 col-12-small">
										<input type="text" name="Promocion" id="contact-name" placeholder="Promocion" />
                                    </div>
                                    <div class="col-6 col-12-small">
										<input type="number"    name="Precio" id="contact-name" placeholder="Precio" />
                                    </div>
                                    <div class="col-6 col-12-small">
                                        <textarea name="descripcion" placeholder="descripcion de tu promocion"></textarea>
                                    </div>
                                    <div class="col-6 col-12-small">
                                        <input type="file" name="imagen" />
                                    </div>
								  	
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" class="style3" value="Subir"/></li>
										</ul>
									</div>
								</div>
							</form>
						</header>
						<div class="row">
							<div class="col-6 col-12-medium">
				</section>
				<!-- Contact Form -->

				<section id="footer" class="wrapper">
					<div class="title">Contacto</div>
					<div class="container">
						
						<div class="row">
							<div class="col-6 col-12-medium">
	
								
									<section>
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7465.6325471514065!2d-103.4105927!3d20.6770524!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428aebf6a03c0e3%3A0x88a97455ea31966a!2sC%C3%A1mara%20de%20Comercio%20de%20Guadalajara!5e0!3m2!1ses-419!2smx!4v1591731050128!5m2!1ses-419!2smx" width="550" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
									</section>
	
							</div>
							<div class="col-6 col-12-medium">
	
								<!-- Contact -->
									<section class="feature-list small">
										<div class="row">
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon solid fa-home">Direccion</h3>
													<p>
														Av. Vallarta 4095 Fracc. Camino Real<br />
														Zapopan, Jalisco, México<br />
													</p>
												</section>
											</div>
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon solid fa-comment">Social</h3>
													<p>
														<a href="https://www.facebook.com/camaradecomerciogdl.mx/" target="blank"><img src="images/iconos/facebook.png" alt=""></a>
														<a href=">https://www.instagram.com/camaradecomerciogdl/" target="blank"><img src="images/iconos/instagram.png" alt=""></a><br />
														<a href="https://twitter.com/CamaradeCom_GDL" target="blank"> <img src="images/iconos/twitter.png" alt=""></a>
														<a href="https://www.youtube.com/user/CamaradeComercioGdl" target="blank"><img src="images/iconos/youtube.png" alt=""></a><br />
														<a href="https://mx.linkedin.com/company/camaradecomerciogdl" target="blank"><img src="images/iconos/linkedin.png" alt=""></a><br />
													</p>
												</section>
											</div>
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon solid fa-envelope">Email</h3>
													<p>
														<a href="#">contacto@camaradecomerciogdl.mx</a>
													</p>
												</section>
											</div>
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon solid fa-phone">Teléfono</h3>
													<p>
														(0133) 3880 9090 <br />
														<img src="images/iconos/whatsapp.png" alt="">  3336765014
													</p>
												</section>
											</div>
										</div>
									</section>
	
							</div>
						</div>
						<div id="copyright">
							<ul>
								<li>&copy; Autem.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</div>
				</section>

		</div>
		<section id="header" class="wrapper">
		<div class="background_modal" id="openmodal">
		<div class="modal_container">
			<a href="#close" class="close_button"><img src="img/close.png" alt=""></a>
			<div class="modal_content">
				<section>
				<div class="avatar">
					<div class="background_image">
						<img src="img/avatar64.jpg" alt="">
					</div>
					<div class="action">
						<h2><a href="profile.php">Benito Camelo Parado Al Fondo</a></h2>
						<h3> <a href="#">Hace dos horas</a></h3>
					</div>
					<div style="clear:both;"></div>
				</div>
				<div class="status">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur exercitationem sit dolores recusandae, reprehenderit atque eos quod excepturi sunt mollitia maxime corrupti, fuga modi vel non architecto quos perspiciatis aperiam? iciatis aperiam
					</p>
				</div>
				<div class="like_tools">
					<a href="#" class="like_button">Me gusta</a>
					<a href="#" class="dislike_button">No me gusta</a>
					<a href="#openmodal" class="comments_button">25 Comentarios</a>
				</div>
				<div class="comments_container">
				<?php for ($i=0; $i < 15; $i++) { ?>
					<div class="comment">
						<div class="image">
							<img src="img/avatar64.jpg" width="35" alt="Imagen">
						</div>
						<div class="text">
							<a href="#" class="name">Soila del Hoyo Prieto</a>
								Lorem ipsum dolor sit amet, consectetur adipisicing.
						</div>
						<div style="clear:both;"></div>
					</div>
				<?php } ?>
				<!-- ========== caja comentario ===========  -->
					<div class="comment">
						<div class="image">
							<img src="img/avatar64.jpg" width="35" alt="Imagen">
						</div>
						<div class="text">
							<form method="post" action="#">
								<input type="text" name="comment" placeholder="Haz un comentario">
							</form>
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>
			</section>
			</div>
		</div>
	</div>
		</section>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>