<?php
	include_once "Usuarios.class.php";
	class UsuariosDAO{
		public function __construct(){
			$this->conexao = 
			new PDO("mysql:host=localhost; dbname=ecommerceeverton", 
			"root", "");
		}
		public function login(Usuarios $usuarios){
			$sql = $this->conexao->prepare("
				SELECT * FROM usuarios WHERE email = :email and adm=true
			");
			$sql->bindValue(":email", $usuarios->getEmail());
			$sql->execute();
			if($sql->rowCount()>0){
				while($retorno = $sql->fetch()){
					if($usuarios->getSenha() == $retorno['senha']){
						return $retorno;//login e senha ok - logar
					}						
				}
				return 1;//senha incorreta
			}
			else{
				return 0;//email nao cadastrado
			}
		}
		public function inserir(Usuarios $usuario){
			$sql= $this->conexao->prepare(
			"INSERT INTO usuarios (email, nome, senha, adm) VALUES 
			(:email, :nome, :senha, :adm)");
			$sql->bindValue(":email", $usuario->getEmail());
			$sql->bindValue(":nome", $usuario->getNome());
			$sql->bindValue(":senha", $usuario->getSenha());
			$sql->bindValue(":adm", $usuario->getAdm());
			return $sql->execute();
		}
		public function listar(){
			$sql = $this->conexao->prepare("
			SELECT * FROM usuarios WHERE adm=true");
			$sql->execute();
			return $sql->fetchAll();
		}
		public function excluir($id_usuario){
			$sql = $this->conexao->prepare("
				DELETE FROM usuarios WHERE id_usuarios = :id_usuarios
			");
			$sql->bindValue(":id_usuarios", $id_usuario);
			return $sql->execute();
		}
		public function retornarUnico($id_usuario){
			$sql = $this->conexao->prepare("
				SELECT * FROM usuarios WHERE id_usuarios = :id_usuario
			");
			$sql->bindValue(":id_usuario", $id_usuario);
			$sql->execute();
			return $sql->fetch();
		}
		public function editar(Usuarios $objUsuario){
			$sql = $this->conexao->prepare("
				UPDATE usuarios 
				SET nome = :nome, adm=:adm, email=:email
				WHERE id_usuarios=:idusuarios
			");
			$sql->bindValue(":nome", $objUsuario->getNome());
			$sql->bindValue(":adm", $objUsuario->getAdm());
			$sql->bindValue(":email", $objUsuario->getEmail());
			$sql->bindValue(":idusuarios", $objUsuario->getId_usuarios());
			return $sql->execute();

		}
	}
?>