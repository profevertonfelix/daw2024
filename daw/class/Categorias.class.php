<?php
	class Categorias{
		private $idcategorias;
		private $nome;
		
		
		public function getIdcategorias(){
			return $this->idcategorias;
		}
		public function setIdcategorias($valor){
			$this->idcategorias = $valor;
		}	
		
		public function getNome(){
			return $this->nome;
		}
		public function setNome($valor){
			$this->nome = $valor;
		}
		
		
	}
?>