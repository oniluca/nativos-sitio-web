<?php
	
	include_once("conexion.php");


	class Master{

		private $conexion;

		public function __construct(){
			$this->conexion = new Conexion();

		}

		public function listar($origen){
			$sql= "SELECT * from $origen order by id asc";
			$resultado= $this->conexion->consultaRetorno($sql);
			return $resultado;	
		}


		public function cortarTexto($texto){
				$palabras= explode(' ',$texto);
				if(count($palabras)> 15){
					return implode(' ',array_slice($palabras,0,15)) ." "."...";
					}else{
						return $texto;
					}
		}
	}



?>