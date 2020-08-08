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
.conteurner1{
	width:60%;
	height:700px;
	background: white;
	color: black;
}
.box{
	width:300px;
	height:300px;
	border: 1em solid transparent;
	
	background-clip: padding-box, border-box;
	background-size:cover;
	background-origin:border-box;


}
.color_{
	color:black;
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
				<section  id="highlights" class="wrapper style3">
					<div class="title">Eventos del Mes</div>
					
						<div class="carrusel relative shadow-2xl ">
							<div class="carrusel-inner relative overflow-hidden w-full flex">
								<div class="carrusel-item  ">	
								
									<div class="carrusel relative shadow-2xl">
										<div class="carrusel-inner relative overflow-hidden w-full flex">
												<?php
														include("../Model/ConEventos.php");
														$Objeto = new  Eveto();
														$Objeto->Inicio();
												?>				
										</div>					
									</div>					
								</div>
								
								<label onclick="slideBackward();reset()" class="color_ w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer text-3xl font-bold  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹‹</label>
								<label onclick="slideForward();reset()" class="color_ w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer text-3xl font-bold  leading-tight text-center z-10 inset-y-0 right-0 my-auto">››</label>
								
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
				  i > <?php echo $_SESSION['contador']?> ? (slidePos = 0) : (i < 0 ? (slidePos = <?php echo $_SESSION['contador']?>) : slidePos = i)
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
	
</body>
</html>