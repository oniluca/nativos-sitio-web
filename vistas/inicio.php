<?php 
	
	$controlador= new ControladorMaster;
	$origen="carrusel";
	$resultado= $controlador->listar($origen);	
	
 ?>

 <div class="container-fluid">
 	<div class="carousel slide"	id="carrusel" data-ride="carousel">
 		<ul class="carousel-indicators">
				<li data-target="slider" data-slide-to="0" class="active"></li>
				<li data-target="slider" data-slide-to="1"></li>
				<li data-target="slider" data-slide-to="2"></li>
        <li data-target="slider" data-slide-to="3"></li>
		</ul>
 		<div class="carousel-inner">
			<?php 
 				while ($row=mysqli_fetch_array($resultado)) {
 					if ($row['id']==1) {
 						echo"<div class='item active'>";
 					}else{
 						echo"<div class='item'>";
 					}

 					echo "<img src=".$row['ruta'].">";
 					echo"</div>";
 				}
 			?> 			
 		</div>
 	</div>
 </div>







  <div id="carousel-1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <?php while($row=mysqli_fetch_array($resultado)){
          if ($row['id']==1){ 
              echo '<div class="item active">';
          } else{ 
              echo'<div class="item">';
            }
        echo"<img src=".$row['ruta']." class='img-responsive' alt=''>";
        echo"<div class='carousel-caption d-none d-md-block'>";
      
        echo "</div>";
        echo "</div>";
        } ?>
      </div>
    </div>
