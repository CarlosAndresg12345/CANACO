<?
session_start();
$User = null; 
if(isset($_SESSION['usuario'])){
    $User = $_SESSION['usuario'];
}
?>
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Conoce Guadalajara</title>
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

					<!-- Nav -->
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
									echo '<li  class="current" > <a href="#" >Usuario: '.$user.'</a>
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
				

						<!-- Image -->
							

						<!-- Features -->
							

			<!-- Highlights -->
			<section id="highlights" class="wrapper style3">
				<div class="title">Restaurantes</div>
				<div class="container">
					<div class="row aln-center">
						<div class="col-4 col-12-medium">
							<section class="highlight">
								<a href="#" class="image featured"><img src="images/Restaurante/Angelo.jpg" alt="" width="200" height="250" /></a>
								<h3><a href="">Terraza Angelo</a></h3>
								<p>Un restaurante con una atmosfera excelente,
									rodeado de naturaleza, en el cual te aseguramos,
									te sentiras acogido.
								</p>
								<ul class="actions">
									<li><a href="https://www.google.com/maps/dir//20.690784,-103.349785/@20.6904626,-103.419847,12z" class="button style1">Llévame</a></li>
								</ul>
							</section>
						</div>
						<div class="col-4 col-12-medium">
							<section class="highlight">
								<a href="#" class="image featured"><img src="images/Restaurante/Ristorante.jpg" alt="" width="200" height="250"/></a>
								<h3><a href="">Ristorante Angelo</a></h3>
								<p>Cálido restaurante con muros de ladrillo y luz tenue
									 en el que se ofrece extenso menú de comida italiana.</p>
								<ul class="actions">
									<li><a href="https://www.google.com/maps/dir//20.690784,-103.349785/@20.6904626,-103.419847,12z" class="button style1">Llévame</a></li>
								</ul>
							</section>
						</div>
						<div class="col-4 col-12-medium">
							<section class="highlight">
								<a href="#" class="image featured"><img src="images/Restaurante/Ahogadas.jpg" alt="" width="200" height="250" /></a>
								<h3><a href="">Las Ahogadas de Sánchez</a></h3>
								<p>Restaurante con un ambiente familiar, en
									el que podran pasar un buen rato, con unas 
									deliciosas tortas ahogadas. </p>
								<ul class="actions">
									<li><a href="https://www.google.com/maps?saddr&daddr=Calle+General+Eulogio+Parra+648,+Guadalajara+M%C3%A9xico@20.68722,-103.34971" class="button style1">Llévame</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
				<!--Otros restaurantes-->
			</section>
			<section id="highlights" class="wrapper style3">
				<div class="container">
					<div class="row aln-center">
						<div class="col-4 col-12-medium">
							<section class="highlight">
								<a href="#" class="image featured"><img src="images/Restaurante/Café.jpg" alt="" width="200" height="250" /></a>
								<h3><a href="">El arte Caféteria Restaurante</a></h3> 
								<p>Caféteria con excelente vista y ambiente, 
									sin duda un lugar relajante.
								</p>
								<ul class="actions">
									<li><a href="https://www.google.com/maps?saddr&daddr=Calle+Maestranza,+Guadalajara+44100+M%C3%A9xico@20.676565,-103.34567" class="button style1">Llévame</a></li>
								</ul>
							</section>
						</div>
						<div class="col-4 col-12-medium">
							<section class="highlight">
								<a href="#" class="image featured"><img src="images/Restaurante/Café2.jpg" alt="" width="200" height="250"/></a>
								<h3><a href="">Caféteria Juan Café</a></h3>
								<p>Pequeño restaurante ideal para desayunos
									en familia.
								</p>
								<ul class="actions">
									<li><a href="https://www.google.com/maps?saddr&daddr=Calle+Maestranza,+Guadalajara+44100+M%C3%A9xico@20.676565,-103.34567" class="button style1">Llévame</a></li>
								</ul>
							</section>
						</div>
						<div class="col-4 col-12-medium">
							<section class="highlight">
								<a href="#" class="image featured"><img src="images/Restaurante/Teatro.jpg" alt="" width="200" height="250" /></a>
								<h3><a href="">Café Boutique Teatro Degollado</a></h3>
								<p>Restaurante café al aire libre, 
									contando con un excelente ambiente.
								</p>
								<ul class="actions">
									<li><a href="https://www.google.com/maps?saddr&daddr=Belen+S/N,+Guadalajara+M%C3%A9xico@20.676853,-103.34502" class="button style1">Llévame</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</section>
			<!-- Footer -->
		<section id="footer" class="wrapper">
			<div class="title">Dejanos tus comentarios</div>
			<div class="container">

				<div class="row">
					<div class="col-6 col-12-medium">

						<!-- Contact Form -->
						<div id="disqus_thread"></div>
						<script>

							/**
							*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
							*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
							/*
							var disqus_config = function () {
							this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
							this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
							};
							*/
							(function () { // DON'T EDIT BELOW THIS LINE
								var d = document, s = d.createElement('script');
								s.src = 'https://https-proycanaco-github-io-canaco.disqus.com/embed.js';
								s.setAttribute('data-timestamp', +new Date());
								(d.head || d.body).appendChild(s);
							})();
						</script>
						<noscript>Please enable JavaScript to view the <a
								href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


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
											<a href="https://www.facebook.com/camaradecomerciogdl.mx/"
												target="blank"><img src="images/iconos/facebook.png" alt=""></a>
											<a href=">https://www.instagram.com/camaradecomerciogdl/"
												target="blank"><img src="images/iconos/instagram.png" alt=""></a><br />
											<a href="https://twitter.com/CamaradeCom_GDL" target="blank"> <img
													src="images/iconos/twitter.png" alt=""></a>
											<a href="https://www.youtube.com/user/CamaradeComercioGdl"
												target="blank"><img src="images/iconos/youtube.png" alt=""></a><br />
											<a href="https://mx.linkedin.com/company/camaradecomerciogdl"
												target="blank"><img src="images/iconos/linkedin.png" alt=""></a><br />
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
											<img src="images/iconos/whatsapp.png" alt=""> 3336765014
										</p>
									</section>
								</div>
							</div>
						</section>

					</div>
				</div>
				<div id="copyright">
					<ul>
						<li>&copy; Autem.</li>
						<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</div>
		</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>