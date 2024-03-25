<?php
	class Usuarios{
		private $Id_usuarios;
		private $nome;
		private $email;
		private $senha;
		private $adm;
		
		public function getId_usuarios(){
			return $this->Id_usuarios;
		}
		public function setId_usuarios($valor){
			$this->Id_usuarios = $valor;
		}	
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($valor){
			$this->email = $valor;
		}	
		public function getSenha(){
			return $this->senha;
		}
		public function setSenha($valor){
			$this->senha = $valor;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($valor){
			$this->nome = $valor;
		}
		public function getAdm(){
			return $this->adm;
		}
		public function setAdm($valor){
			$this->adm = $valor;
		}
		
	}
?>