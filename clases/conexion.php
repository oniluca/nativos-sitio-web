<?php 
	
	class Conexion
	{
		private $host;
		private $user;
		private $pass;
		private $db;
		private $conexion;


		public function __construct(){

			$this->host="localhost";
			$this->user="root";
			$this->pass="1234";
			$this->db="nativos";

			$this->conexion = new mysqli($this->host,$this->user,$this->pass);
			if ($this->conexion) {
				mysqli_select_db($this->conexion,$this->db);
			}
		}

		//consulta que no devuelve nada
		public function consultaSimple($sql){
			$this->conexion->query($sql);
		}
		//consulte que devuelve un resultado
		public function consultaRetorno($sql){
			$consulta=$this->conexion->query($sql);
			return $consulta;
		}
	}
	
 ?>