<?php 
	$controlador = new ControladorMaster;
	$origen="noticias";
	$resultado = $controlador->listar($origen);
?>
<hr/>
<div class="container">
	<div class="wrapper wow fadeInLeft delay-05s">
	<h1 class="titulo">Noticias</h1>
	</div>
	
	<div class="row">
			<?php while ($row=mysqli_fetch_array($resultado)){?>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 contenedor">
					<div class="contenedor wow fadeInLeft delay-0.5s imagen">
		            	<?php echo"<img src=".$row['imagen']." width='100%''></img>";?>
		            </div>

		            <div class="box wow fadeInRight noticia">	            	
		              	<h3 class="tituloNoticias"><p><?php echo $row["titulo"]; ?></p></h3>
		              	<p><?php echo $controlador->cortarTexto($row["descripcion"]); ?></p>     
		            </div>

		            <div class="fecha">
		            	<?php setlocale(LC_TIME, 'spanish');?>
		            	<?php $fecha=date_create($row["fecha"]);?>
		            	<?php $fecha=date_format($fecha,"d - F" );?>
		            	<p><?php echo strftime("%d de %B", strtotime($fecha));?></p>
		            </div>
		            
		            <button type="button" class="btn btnLeerMas" data-toggle="modal" data-target="#modalNoticia" data-foto="<?php echo $row['imagen']?>" data-titulo="<?php echo $row['titulo'];?>" data-descripcion="<?php echo $row['descripcion']?>">
 						 LEER MAS
					</button>
		           
		        </div>
			<?php } ?>	

	</div>


	<div class="modal fade" id="modalNoticia" tabindex="-1" aria-labelledby="modalNoticia" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <img src="" class="fotoModal"></img>
	      </div>
	      <div class="modal-body">
	       	<h3 class="modal-title"></h3>
	        <p></p>
	      </div>
	     </div>
	  </div>
	</div>

</div>
