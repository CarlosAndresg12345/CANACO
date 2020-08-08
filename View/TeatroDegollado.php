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
		<title>Teatro Degollado</title>
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
					<div class="title">Teatro Degollado</div>
					<div class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Arte y cultura juntos<br class="mobile-hide" />
										</h2>
										<p>Estilo neoclásico que perdura en Hispanoamérica</p>
									</header>
									<a href="images/Infografias/Degollado1.jpg" class="image featured">
										<img src="images/Infografias/Degollado1.jpg" alt="" height="500" width="500"/>
									</a>
									<p>El Teatro Santos Degollado es un edificio de mediados del siglo XIX, ubicado en 
										la ciudad mexicana de Guadalajara. El inmueble es escenario habitual de recitales, 
										conciertos, espectáculos de danza clásica y contemporánea. Asimismo es la sede 
										de la Orquesta Filarmónica de Jalisco.

										Junto a la Catedral de Guadalajara, el Hospicio Cabañas, la Glorieta Minerva y 
										los Arcos de Guadalajara es uno de los monumentos más representativos de esta 
										ciudad situada en el estado de Jalisco. </p>

									<p>La construcción es de un estilo neoclásico recargado, siguiendo la influencia del 
										teatro italiano. Su bóveda tiene frescos de Gerardo Suárez y Jacobo Gálvez que 
										aluden al canto cuarto de la Divina Comedia El vestíbulo oval mide 10 × 6,5 m de 
										ancho. Este edificio tiene 97 m de largo, 36,4 m de ancho y una altura máxima de 22,5 m. Su 
										pórtico lo conforman 16 columnas arquitrabadas de orden corintio. Su fachada se 
										reviste de cantera y se montó un relieve en mármol, con la imagen de Apolo y 
										las nueve Musas, obra del artista nacido en Pueblo Nuevo, Guanajuato y tapatío 
										por adopción, Benito Castañeda Arredondo; abajo de este pórtico en mármol travertino 
										se lee la frase "Que nunca llegue el rumor de la discordia". </p>
									<a href="images/Infografias/Degollado2.jpeg" class="image featured">
										<img src="images/Infografias/Degollado2.jpeg" alt="" height="500" width="500"/>
									</a>
									<p>
										A lo largo de su historia, el teatro ha tenido varias reaperturas: el 13 de 
										septiembre de 1866, el 30 de octubre de 1880, el 15 de septiembre de 1910, 
										el 28 de junio de 1941, el 8 de septiembre de 1964 y el 25 de noviembre de 2005.
									</p>
									<p>
										En su más reciente restauración se aplicaron transformaciones muy relevantes al inmueble, 
										como la colocación de nuevos pisos, butaquería, trabajos de pintura, sustitución de 
										luminarias, cambio de duela en el escenario e instalación de plataforma hidráulica, 
										instalación de nuevo sistema de aire acondicionado y remodelación de área de camerinos, 
										entre otras. En el marco de esos trabajos, también se aplicó restauración a la hoja 
										de oro de 23 3/4 kilates en áreas como arco de proscenio, águila colosal, marcos, 
										columnas, remates y mascarones en proscenios. Sumamente importante también fue la 
										restauración del telón guillotina que representa una escena griega llamada Festival 
										ateniense, obra que data de alrededor de 1880 y cuya pintura fue ejecutada por el 
										artista italiano Carlos Fontana.
									</p>
									<a href="images/Infografias/Degollado3.jpeg" class="image featured">
										<img src="images/Infografias/Degollado3.jpeg" alt="" height="500" width="500"/>
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