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
		<title>Rotonda de los jalisciences ilustres</title>
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
		<link rel="stylesheet" href="assets/css/main.css">
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
					<div class="title">Rotonda de los Jalisciences ilustres </div>
					<div class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Para rendirles homenaje<br class="mobile-hide" />
										</h2>
										<p>Jalisco a sus hijos esclarecidos</p>
									</header>
									<a href="images/Infografias/Rotonda1.jpg" class="image featured">
										<img src="images/Infografias/Rotonda1.jpg" alt="" height="500" width="500"/>
									</a>
									<p>La Rotonda de los Jaliscienses Ilustres es un monumento de la ciudad
										 de Guadalajara, Jalisco, que  rinde homenaje a la memoria de los 
										 jaliscienses que han trascendido a través de la historia.

										Esta famosa e importante rotonda se encuentra en el cruce de Avenida 
										Hidalgo y Av. Fray Antonio Alcalde, a un costado de la Catedral de 
										Guadalajara en el centro de la ciudad.
									</p>

									<p>El monumento construido en el año de 1952, por el arquitecto Vicente 
										Mendiola, bajo iniciativa del entonces gobernador del estado José 
										Jesús González Gallo, consta de diecisiete columnas estriadas sin 
										base ni capital y que sostienen un anillo de cantera que tiene 
										grabado en uno de sus lados la leyenda “Jalisco a sus hijos esclarecidos”; 
										en el centro del monumento existe un pebetero, además en la rotonda, 
										hay noventa y ocho nichos para albergar los cuerpos de los hombres 
										y mujeres más ilustres y a su alrededor también existen veintidós 
										estatuas de preclaros jaliscienses.  
									</p>
									<a href="images/Infografias/Rotonda2.jpg" class="image featured">
										<img src="images/Infografias/Rotonda2.jpg" alt="" height="500" width="500"/>
									</a>
									<p>
										El monumento contiene un total de 98 urnas para albergar los restos de 
										personajes destacados en el arte, literatura, ciencia y en labores de 
										mejoramiento de la ciudad. 
										Algunos de los Personajes que se encuentran en la Rotonda de los hombres ilustres son:

    Clemente Aguirre (Músico)
    Dr. Atl (Artista)
    Luis Barragán Morfín ( Ingeniero y Arquitecto)
    José Clemente Orozco (Muralista y litografo)
    Agustín de la Rosa (Escritor, periodista y orador sagrado)
    Enrique Díaz de León (poeta, orador e ideólogo de izquierda)
    Manuel M. Diéguez  (Militar)
    Gabriel Flores García (pintor, dibujante y muralista)
    Jacobo Gálvez (arquitecto, pintor y fotógrafo)
    Marcelino García Barragán (Militar y politico)
    Valentín Gómez Farías (médico y político)
    Efraín González Luna (abogado y político)
    Enrique González Martínez (poeta, editorialista y diplomático)
    Heliodoro Hernández Loza (Politico)
    Manuel López Cotilla (Educador y politico)
    Pedro Moreno
    Leonardo Oliva (Medico)
    Mariano Otero (jurista y político)
    Rita Pérez Jiménez (Heroína de la independencia)
    Luis Pérez Verdía (Historiador y biógrafo)
    Alfredo R. Placencia (Poeta y sacerdote)
    Irene Robledo ( educadora y humanista ) 1988
    Francisco Rojas González (escritor, etnólogo y guionista de cine)
    Francisco Silva Romero
    Gerardo Suárez (Pintor)
    Ignacio L. Vallarta (Politico)
    Agustín Yáñez (novelista, ensayista y cuentista)
    José Guadalupe Zuno (abogado, humanista, naturista, caricaturista, pintor, escritor y maestro )
    Jorge Matute Remus (Ingeniero)
 
									</p>
									
									<a href="images/Infografias/Rotonda3.jpeg" class="image featured">
										<img src="images/Infografias/Rotonda3.jpeg" alt="" height="500" width="500"/>
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