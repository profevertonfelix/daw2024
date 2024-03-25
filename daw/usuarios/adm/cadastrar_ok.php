<?php
	session_start();
	
	include_once "../../class/Usuarios.class.php";
	include_once "../../class/UsuariosDAO.class.php";
	
	if(!isset($_SESSION['logadoAdm'])){
		header("location=../login.php");
	}
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$objUsuario = new Usuarios();
	$objUsuario->setNome($nome);
	$objUsuario->setEmail($email);
	$objUsuario->setSenha($senha);
	$objUsuario->setAdm(true);
	
	$objUsuarioDAO =new UsuariosDAO();
	$retorno = $objUsuarioDAO->inserir($objUsuario);
	if($retorno)
		header("location:index.php?admOk");
	else
		header("location:cadastrar.php?error");
	
	
	
	
?>