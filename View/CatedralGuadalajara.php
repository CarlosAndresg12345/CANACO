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
		<title>Catedral Guadalajara</title>
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
					<div class="title">Catedral de Guadalajara</div>
					<div class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Simbolo y emblema de la ciudad<br class="mobile-hide" />
										</h2>
										<p>Catedral Basílica de la Asunción de
											María Santísima</p>
									</header>
									<a href="images/Infografias/Catedral1.jpg" class="image featured">
										<img src="images/Infografias/Catedral1.jpg" alt="" height="500" width="500"/>
									</a>
									<p>La Catedral de Guadalajara es uno de los monumentos más bellos de la ciudad 
										y el icono más representativo del Centro Histórico de Guadalajara. Conocida 
										también como Catedral Metropolitana o Catedral Basílica de la Asunción de
										 María Santísima, tiene una gran historia de más de 4 siglos y es sede de 
										 la actual Arquidiócesis. 

										 En 1561 el Rey de España Felipe II la mandó construir, fue dedicada en el 
										 año de 1618 y consagrada el 12 de Octubre de 1716. Su construcción estuvo
										  a cargo del Arq. Martín Casillas. La fachada está construida con una 
										  mezcla de estilos arquitectónicos gracias a la combinación de influencias 
										  góticas, barrocas, moriscas y neoclásicas. Única en el país con su 
										  interior estilo gótico, las tres naves constan de seis tramos altos 
										  y espaciosos cubiertos con bóvedas y nervaduras de dorados pinjantes.
										   A la misma altura cada nave, en los muros laterales hay redondos pilarones estriados. 
									</p>

									<p>Entre sus tesoros se aprecia La Purísima Concepción, pintura creada por 
										Bartolomé Esteban Murillo. También famoso es su órgano, el segundo más 
										grande la República Mexicana, de origen francés. Destaca también la 
										escultura de la Virgen de la Rosa, regalo del emperador Carlos V, 
										un cristo de marfil y óleos de artistas mexicanos.  
									</p>
									<a href="images/Infografias/Catedral2.jpg" class="image featured">
										<img src="images/Infografias/Catedral2.jpg" alt="" height="500" width="500"/>
									</a>
									<p>
										La cripta de los arzobispos es uno de los mayores atractivos. 
										Debajo del coro y del altar mayor se encuentran las criptas de 
										los obispos y cardenales donde yacen los restos de quienes han 
										gobernado la diócesis desde el siglo XVI incluyendo el cuerpo de 
										Juan Jesús Posadas Ocampo, asesinado en 1993 en el Aeropuerto 
										Internacional de Guadalajara. También están los restos de los obispos 
										Francisco Gómez de Mendiola y Don Juan Santiago de León Garabito 
										quienes al fallecer, sus cuerpos quedaron incólumes por lo que 
										se les atribuye santidad. 
									</p>
									<p>
										Sus féretros se colocaron a los lados de la puerta principal y 
										los feligreses los tocaban para pedirles favores: si al poner 
										el oído sobre la caja escuchaban una respuesta desde el interior, 
										el milagro sería concedido. Sublime para algunos y grotesca para otros, 
										una de las principales reliquias del arzobispado tapatío es el 
										Relicario de los Mártires que consiste en una vitrina que exhibe 
										los restos óseos de 23 hombres. Los restos de estos hombres fueron 
										beatificados por el Papa Juan Pablo II en 1992 en honor a haber defendido 
										la libertad de culto religioso durante las guerras cristeras. 
									</p>
									<a href="images/Infografias/Catedral3.jpg" class="image featured">
										<img src="images/Infografias/Catedral3.jpg" alt="" height="500" width="500"/>
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