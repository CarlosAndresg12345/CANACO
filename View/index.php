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
		<title>Conoce Guadalajara</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<style>

input#search{
  background-color: transparent;
  color: white;
  border-color: transparent;

}

.carousel-item {
-webkit-transition: all 0.6s ease-out;
transition: all 0.6s ease-out;
left: 0;
}

.carousel-indicators {
list-style: none;
margin: 0;
padding: 0;
position: absolute;
bottom: 2%;
left: 0;
right: 0;
text-align: center;
z-index: 10;
}

.carousel-bullet.active {
color: #2b6cb0;
}
#portada{
right: 50%;
}

.carrusel{
	top: 25px;
}

.carrusel-item {
  -webkit-transition: all 0.6s ease-out;
  transition: all 0.6s ease-out;
  left: 0;
  width: 780;
}

.carrusel-indicators {
  list-style: none;
  margin: 0;
  padding: 0;
  position: absolute;
  bottom: 2%;
  left: 0;
  right: 0;
  text-align: center;
  z-index: 10;
}

.carrusel-bullet.active {
  color: #2b6cb0;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    background-image: url(../image/fondo.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: 330vh;
}

h2{
    text-align: center;
    font-size: 40px;
    font-family: arial;
    margin-top: 80px;
    color: aqua;
    text-shadow: 0px 0px 6px black;
}

.content-all{
    width: 210px;
    margin: auto;
    perspective: 800px;
    position: relative;
    top: -50px;
}

.content-carrousel{
    width: 100%;
    position: absolute;
    animation: rotar 10s infinite linear;
    transform-style: preserve-3d;
}

.content-carrousel:hover{
    animation-play-state: paused;
    cursor: pointer;
}


.content-carrousel figure{
    width: 100%;
    height: 120px;
    overflow: hidden;
    position: absolute;
    box-shadow: 0px 0px 20px 0px black;
    transition: all 300ms;
    
}

.content-carrousel figure:hover{
    box-shadow: 0px 0px 0px 0px black;
    transition: all 300ms;
}

.content-carrousel figure:nth-child(1){transform: rotateY(0deg) translateZ(300px);}
.content-carrousel figure:nth-child(2){transform: rotateY(40deg) translateZ(300px);}
.content-carrousel figure:nth-child(3){transform: rotateY(80deg) translateZ(300px);}
.content-carrousel figure:nth-child(4){transform: rotateY(120deg) translateZ(300px);}
.content-carrousel figure:nth-child(5){transform: rotateY(160deg) translateZ(300px);}
.content-carrousel figure:nth-child(6){transform: rotateY(200deg) translateZ(300px);}
.content-carrousel figure:nth-child(7){transform: rotateY(240deg) translateZ(300px);}
.content-carrousel figure:nth-child(8){transform: rotateY(280deg) translateZ(300px);}
.content-carrousel figure:nth-child(9){transform: rotateY(320deg) translateZ(300px);}
.content-carrousel figure:nth-child(10){transform: rotateY(360deg) translateZ(300px);}

.content-carrousel img{
    width: 100%;
    transition: all 500ms;
}

.content-carrousel img:hover{
    transform: scale(1.2);
    transition: all 500ms;
}


@keyframes rotar{
    from{
        transform: rotateY(0deg);
    }to{
        transform: rotateY(360deg);
    }
}
	</style>	

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/carrusel.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
		<meta charset="utf-8" />
		
		
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

		<!-- Header -->
		<section id="header" class="wrapper">			
			<!-- Logo -->			
			<div class="content-all">
				<div class="content-carrousel">
					<figure><img src="images/3D1.jpg"></figure>
					<figure><img src="images/3D2.jpg"></figure>
					<figure><img src="images/3D3.jpg"></figure>
					<figure><img src="images/3D4.jpg"></figure>
					<figure><img src="images/3D5.jpg"></figure>
					<figure><img src="images/3D6.jpg"></figure>
					<figure><img src="images/3D7.jpg"></figure>
					<figure><img src="images/3D8.jpg"></figure>
					<figure><img src="images/3D9.jpg"></figure>
					<figure><img src="images/3D10.jpg"></figure>
				</div>
				
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

					<!-- Intro -->
		<section id="" class="wrapper style1">
			<div class="carrusel relative shadow-2xl">
				<div class="carrusel-inner relative overflow-hidden w-full flex">
				
					<div class="carrusel-item w-full min-w-full relative">
						<div class="block h-full w-full text-white text-5xl text-center">
							<a href=""><img class="mx-auto" src="images/Carrusel1.jpg" width="780"></a>
						</div>
					</div>
					<div class="carrusel-item w-full min-w-full relative">
						<div class="block h-full w-full text-white text-5xl text-center">
							<img class="mx-auto" src="images/Carrusel2.jpg" width="780">
						</div>
					</div>
					<div class="carrusel-item w-full min-w-full relative">
						<div class="block h-full w-full text-white text-5xl text-center">
							<img class="mx-auto" src="images/Carrusel5.jpg" width="780">
						</div>
					</div>
				</div>
				<label onclick="slideBackward();reset()" class="w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer text-3xl font-bold text-white leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹‹</label>
				<label onclick="slideForward();reset()" class="w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer text-3xl font-bold text-white leading-tight text-center z-10 inset-y-0 right-0 my-auto">››</label>
				<ol class="carrusel-indicators">
					<li onclick="setSlideActive(0);reset()" class="inline-block mr-3">
						<label class="carrusel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700 active">•</label>
					</li>
					<li onclick="setSlideActive(1);reset()" class="inline-block mr-3">
						<label class="carrusel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
					</li>
					<li onclick="setSlideActive(2);reset()" class="inline-block mr-3">
						<label class="carrusel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
					</li>
				</ol>
			</div>

			<script>
				/**
				* carrusel
				*/
				var slides = document.querySelectorAll('.carrusel-item');
				var bullets = document.querySelectorAll('.carrusel-bullet');
				var slidePos = 0;
				var interval = 5500
				
				function setSlideActive(i) {
				  // infinite loop
				  i > 2 ? (slidePos = 0) : (i < 0 ? (slidePos = 2) : slidePos = i)
				  var c = 0
				  while (c < slides.length) {
					slides[c++].style.left = "-" + slidePos + "00%"
				  }
				  var e = 0
				  while (e < bullets.length) {
					bullets[e++].classList.remove("active")
				  }
				  bullets[slidePos].classList.add("active")
				}
				
				// Navigation
				function slideForward() {
				  setSlideActive(++slidePos)
				}
				function slideBackward() {
				  setSlideActive(--slidePos)
				}
				// Timer
				var myTimer
				window.onload = function() {
				  myTimer = setInterval(function() { setSlideActive(++slidePos) }, interval)
				}
				// Reset
				function reset() {
				  clearInterval(myTimer);
				  myTimer = setInterval(function() { setSlideActive(++slidePos) }, interval)
				}
				
					</script>
		
		</section>
		<!-- Highlights -->
		<section id="highlights" class="wrapper style3">
			<div class="title">Atracciones</div>
			<div class="container">
				<div class="row aln-center">
					<div class="col-4 col-12-medium">
						<section class="highlight">
							<a href="#" class="image featured"><img src="images/IndexPic/Catedralgdl.jpg" alt=""
									width="200" height="250" /></a>
							<h3><a href="CatedralGuadalajara.php">Catedral de Guadalajara</a></h3>
							<p>La Catedral de Guadalajara es uno de
								los edificios más simbólicos de Guadalajara.
								Un edificio icónico que distingue a la perla
								tapatía de otras metrópolis de México.</p>
							<ul class="actions">
								<li><a href="CatedralGuadalajara.php" class="button style1">Saber más</a></li>
							</ul>
						</section>
					</div>
					<div class="col-4 col-12-medium">
						<section class="highlight">
							<a href="#" class="image featured"><img src="images/IndexPic/Degollado.jpeg" alt=""
									width="200" height="250" /></a>
							<h3><a href="TeatroDegollado.php">Teatro Degollado</a></h3>
							<p>El Teatro Degollado es considerado el más importante del acervo cultural de Jalisco.
								De estilo neoclásico es el edificio mejor conservado de Hispanoamérica,
								destacando como el más antiguo de la república mexicana en operación. </p>
							<ul class="actions">
								<li><a href="TeatroDegollado.php" class="button style1">Saber más</a></li>
							</ul>
						</section>
					</div>
					<div class="col-4 col-12-medium">
						<section class="highlight">
							<a href="#" class="image featured"><img src="images/IndexPic/Rotonda.jpeg" alt=""
									width="200" height="250" /></a>
							<h3><a href="RotondaJalisciences.php">Rotonda de los jalisciences ilustres</a></h3>
							<p>Es un monumento funerario destinado al homenaje de los hombres y mujeres que han
								aportado,
								mediante su esfuerzo y patriotismo, al desarrollo político, social, cultural,
								científico y militar de México. </p>
							<ul class="actions">
								<li><a href="RotondaJalisciences.php" class="button style1">Saber más</a></li>
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
	<div class="alert alert-danger" role="alert">
		A simple danger alert—check it out!
	  </div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/carrusel.js"></script>
	<script src="assets/js/bootstrap.js"></script>

</body>

</html>