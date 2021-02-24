<?php 
	
	$controlador = new ControladorMaster;
	$origen = "galeria";
	$resultado = $controlador->listar($origen);

?>
<hr/>
<div class="container">
	<div class="wrapper wow fadeInLeft delay-05s">
		<h1 class="titulo">Galeria</h1>
	</div>
	<div class="row">
		<?php while ($row=mysqli_fetch_array($resultado)){?>
			<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2">
				<div class="fotoGaleria">
					<div class="foto">
						<div class="wrapper wow fadeInUp delay-05s">
							<?php echo "<a class='example-image-link' href=".$row['ruta_imagen']." data-lightbox='foto'><img src=".$row['ruta_imagen']." width='100%' alt='nativos en vivo' title='nativosfolk en vivo'></a>";?>
						</div>
					</div>
				</div>			
			</div>
		<?php } ?>
	</div>
</div>