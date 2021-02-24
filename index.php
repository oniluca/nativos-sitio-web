<?php 
	include_once("modulos/controlador.php")
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
 	
 	<meta charset="utf-8">
 	<meta content="width=device-width" name="viewport">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="description" content="Nativos grupo Folklorico Lavalle, Mendoza">
 	<meta name="keywords" content="folklore,mendoza,lavalle,musica,nativos">
 	<title>NATIVOS</title>
 	<link rel="shortcut icon" type="image/png" href="imagenes/logos/logo.png">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
 	<link rel="stylesheet" type="text/css" href="css/animate.css">	
 	<link rel="stylesheet" type="text/css" href="css/estilos.css">
 	<link rel="stylesheet" type="text/css" href="css/lightbox.css">

 	

 </head>
 <body>
	<header id="header" class="">
		<nav id="nav" class="navbar navbar-default navbar-fixed-top">
	 		<a class="navbar-brand" href=""><img src="imagenes/logos/Sin título-1.png" width="50%"></a>
	 		<div class="navbar-header">
	 			<button id="button" type="button" class="navbar-toggle boton" data-toggle="collapse" data-target="#menu">
	 				<span class="fa fa-bars"></span>
	 			</button>
	 		</div>
	 		
	 		<div class="collapse navbar-collapse navbar-right" id="menu">		
		 		<ul class=" nav navbar-nav">
		 			<li class="active"><a href="#inicio">INICIO</a></li>
		 			<li><a href="#nosotros">NOSOTROS</a></li>
		 			<li><a href="#galeria">GALERIA</a></li>
		 			<li><a href="#discografia">DISCOGRAFIA</a></li>
		 			<li><a href="#fechas">FECHAS</a></li>
		 			<li><a href="#noticias">NOTICIAS</a></li>
		 			<li><a href="#footer">CONTACTO</a></li>
		 		</ul>
		 	</div>
	 	</nav>
	</header><!-- /header -->
 	<section id="inicio">
 		<?php include 'vistas/inicio.php';?>	
 	</section>
 	
 	<section id="nosotros">
 		<?php include 'vistas/nosotros.php';?>
 	</section>
 	
 	<section id="galeria">
 		<?php include 'vistas/galeria.php';?>	
 	</section>

 	<section class="parallax bg-image-2 section">
 		
 		
 	</section>
 	
 	<section id="discografia">
 		<?php include 'vistas/discografia.php';?>	
 	</section>
 	
 	<section id="fechas">
 		<?php include 'vistas/fechas.php';?>
 	</section>
 	
 	<section id="noticias">
 		<?php include 'vistas/noticias.php';?>
 	</section>

 	<footer id="footer">
 			<?php include 'vistas/footer.php';?>
 	</footer>

 	
 </body>
 	<script type="text/javascript" src="js/jquery.min.js"></script>
 	<script type="text/javascript" src="js/jquery.easing.min.js"></script>
 	<script type="text/javascript" src="js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="js/wow.js"></script>
 	<script type="text/javascript" src="js/estilo.js"></script>
 	<script type="text/javascript" src="js/lightbox.js"></script>
 </html>