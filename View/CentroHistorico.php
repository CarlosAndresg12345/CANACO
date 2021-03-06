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
		<title>Centro Historico</title>
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
	<body class="no-sidebar is-preload">
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
				<div id="main" class="wrapper style2">
					<div class="title">Centro Historico</div>
					<div class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>El corazón de la ciudad<br class="mobile-hide" />
										</h2>
										<p>La perla de occidente</p>
									</header>
									<a href="images/Infografias/CentroHistorico1.jpg" class="image featured">
										<img src="images/Infografias/CentroHistorico1.jpg" alt="" height="500" width="500"/>
									</a>
									<p>El Centro de Guadalajara es la parte originaria de dicha ciudad, el cual se 
										compone de edificaciones, monumentos, plazas y parques construidos a lo largo
										 de sus más de cuatro siglos de historia. En él se encuentran expresiones de 
										 arquitectura Colonial, barroca, neoclásica, Art Nouveau y demás. 
										 El complejo nace con la fundación de la ciudad en el año de 1542 
										 por los españoles, cuyo lugar se estima a espaldas del Teatro Degollado 
										 donde se encuentra la Plaza Fundadores.</p>
									<p>El Centro Histórico de la ciudad se ha caracterizado por cambiar a lo largo 
										del tiempo, y aunque aún se conservan varios edificios que datan del siglo 
										de la fundación de la ciudad, muchos de éstos fueron derribados para dar 
										paso a edificios más funcionales, avenidas más amplias, así como para 
										construir la Cruz de Plazas que rodea la Catedral de Guadalajara y la Plaza Tapatía.</p>
									<a href="images/Infografias/CentroHistorico2.jpg" class="image featured">
										<img src="images/Infografias/CentroHistorico2.jpg" alt="" height="500" width="500"/>
									</a>
									<p>
										Guadalajara cuenta con un centro histórico muy bien mantenido, con gran arquitectura y 
										mucho que contar. La ciudad fue fundada por los españoles en el año 1542 y desde entonces 
										se ha destacado en varios hechos históricos y culturales; es cuna de los mariachis y 
										sede del Festival Internacional del Cine de Guadalajara y de la Feria Internacional del Libro de Guadalajara.
										El punto de comienzo para una recorrida podría ser su famosa Catedral, dominada por dos torres con agujas neogóticas. La misma fue 
										terminada en el año 1618 y actualmente se encuentra en riesgo edilicio a raíz de los numerosos sismos por los que pasó.
									</p>
									<p>
										La Plaza de Armas, recientemente renovada, cuenta con un muy cuidado jardín, con un bello 
										quiosco de hierro forjado estilo francés en el centro e iluminado por farolas del mismo estilo.
										 Esta plaza es lugar de reunión y paseo de familias, donde siempre habrá algún vendedor 
										 de globos, dulces o nieves para los más pequeños.
									</p>
									<a href="images/Infografias/CentroHistorico3.jpg" class="image featured">
										<img src="images/Infografias/CentroHistorico3.jpg" alt="" height="500" width="500"/>
									</a>
								</article>
							</div>

					</div>
				</div>

			<!-- Highlights -->
			<section id="highlights" class="wrapper style3">
				<div class="title">Atracciones</div>
				<div class="container">
					<div class="row aln-center">
						<div class="col-4 col-12-medium">
							<section class="highlight">
								<a href="#" class="image featured"><img src="images/IndexPic/Catedralgdl.jpg" alt="" width="200" height="250" /></a>
								<h3><a href="CatedralGuadalajara.html">Catedral de Guadalajara</a></h3>
								<p>La Catedral de Guadalajara es uno de 
									los edificios más simbólicos de Guadalajara.
									 Un edificio icónico que distingue a la perla 
									 tapatía de otras metrópolis de México.</p>
								<ul class="actions">
									<li><a href="CatedralGuadalajara.html" class="button style1">Saber más</a></li>
								</ul>
							</section>
						</div>
						<div class="col-4 col-12-medium">
							<section class="highlight">
								<a href="#" class="image featured"><img src="images/IndexPic/Degollado.jpeg" alt="" width="200" height="250"/></a>
								<h3><a href="TeatroDegollado.html">Teatro Degollado</a></h3>
								<p>El Teatro Degollado es considerado el más importante del acervo cultural de Jalisco. 
									De estilo neoclásico es el edificio mejor conservado de Hispanoamérica, 
									destacando como el más antiguo de la república mexicana en operación. </p>
								<ul class="actions">
									<li><a href="TeatroDegollado.html" class="button style1">Saber más</a></li>
								</ul>
							</section>
						</div>
						<div class="col-4 col-12-medium">
							<section class="highlight">
								<a href="#" class="image featured"><img src="images/IndexPic/Rotonda.jpeg" alt="" width="200" height="250" /></a>
								<h3><a href="RotondaJalisciences.html">Rotonda de los jalisciences ilustres</a></h3>
								<p>Es un monumento funerario destinado al homenaje de los hombres y mujeres que han aportado, 
									mediante su esfuerzo y patriotismo, al desarrollo político, social, cultural, 
									científico y militar de México. </p>
								<ul class="actions">
									<li><a href="RotondaJalisciences.html" class="button style1">Saber más</a></li>
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