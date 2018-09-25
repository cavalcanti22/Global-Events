<?php 

	class Model 
	{
		
		// private $host = "localhost";
		private $host = "global1959.mysql.dbaas.com.br";
		// private $usuario = "root";
		private $usuario = "global1959";
		// private $senha = "";
		private $senha = "vitoria22";
		private $db = "global1959";
		// private $db = "global";

		public function execute($q){
			
			$mysqli = new mysqli($this->host, $this->usuario, $this->senha, $this->db);
			$result = $mysqli->query($q);
			$mysqli->close();
			return $result;
		}
	}
 ?>