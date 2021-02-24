<?php 
	$controlador = new ControladorMaster;
	$origen="fechas";
	$resultado = $controlador->listar($origen);
?>
<hr/>
<div class="container">
	<div class="wrapper wow fadeInLeft delay-05s">
	<h1 class="titulo">Fechas</h1>
	</div>
	

	<div class="row">
		<?php while ($row=mysqli_fetch_array($resultado)){?>
			<div class="col-lg-6">
				<div class="contenedor wow fadeInLeft delay-0.5s">
	            	<?php echo"<img src=".$row['imagen']." width='100%''></img>";?>
	            </div>
	            <div class="fecha">
	            	<?php setlocale(LC_TIME, 'spanish');?>
	            	<?php $fecha=date_create($row["fecha"]);?>
	            	<?php $fecha=date_format($fecha,"d - F" );?>
	            	<p><?php echo strftime("%d de %B", strtotime($fecha));?></p>
	            	
	            </div>
	            <div class="box wow fadeInRight">	            	
	              	<h3 class="tituloFecha"><p><?php echo $row["titulo"]; ?></p></h3>
	              	<p><?php echo $row["descripcion"]; ?></p>     
	            </div>
	         </div>
		<?php } ?>
	</div>
</div>
