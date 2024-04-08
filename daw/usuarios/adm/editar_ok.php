<?php
	session_start();
	
	include_once "../../class/Usuarios.class.php";
	include_once "../../class/UsuariosDAO.class.php";
	
	if(!isset($_SESSION['logadoAdm'])){
		header("location=../login.php");
	}
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$adm = $_POST['adm'];
	$idusuarios = $_POST['id_usuarios'];
	
	$objUsuario = new Usuarios();
	$objUsuario->setNome($nome);
	$objUsuario->setEmail($email);
	$objUsuario->setAdm($adm);
	$objUsuario->setId_usuarios($idusuarios);
	
	$objUsuarioDAO =new UsuariosDAO();
	$retorno = $objUsuarioDAO->editar($objUsuario);
	if($retorno)
		header("location:listar.php?editarOk");
	else
		header("location:listar.php?editarNok");
	
	
	
	
?>