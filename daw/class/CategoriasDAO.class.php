<?php
	include_once "Categorias.class.php";
	class CategoriasDAO{
		public function __construct(){
			$this->conexao = 
			new PDO("mysql:host=localhost; dbname=ecommerceeverton", 
			"root", "");
		}
		
		
		public function listar(){
			$sql = $this->conexao->prepare("
			SELECT * FROM categorias");
			$sql->execute();
			return $sql->fetchAll();
		}
	
	}
?>