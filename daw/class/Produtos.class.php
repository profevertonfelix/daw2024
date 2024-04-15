<?php
	class Produtos{
		private $idprodutos;
		private $nome;
		private $preco;
		private $idcategorias;
		private $foto;
		
		
		public function getIdprodutos(){
			return $this->idprodutos;
		}
		public function setIdprodutos($valor){
			$this->idprodutos = $valor;
		}
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
		public function getPreco(){
			return $this->preco;
		}
		public function setPreco($valor){
			$this->preco = $valor;
		}		
		public function getFoto(){
			return $this->foto;
		}
		public function setFoto($valor){
			$this->foto = $valor;
		}
		
		
	}
?>