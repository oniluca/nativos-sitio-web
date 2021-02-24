<?php 
	
	include_once("clases/master.php");

	class ControladorMaster{

		private $master;

		public function __construct(){
			$this->master = new Master();
		}

		public function listar($origen){
			$resultado=$this->master->listar($origen);
			return $resultado;
		}


		public function cortarTexto($texto){
			$resultado=$this->master->cortarTexto($texto);
			return $resultado;
		}

	}
 ?>