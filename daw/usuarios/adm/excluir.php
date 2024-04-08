<?php
	session_start();
	
	include_once "../../class/Usuarios.class.php";
	include_once "../../class/UsuariosDAO.class.php";
	
	if(!isset($_SESSION['logadoAdm'])){
		header("location=../login.php");
	}
	
	$id_usuario = $_GET['id'];
	
	$objUsuariosDAO = new UsuariosDAO();
	$retorno = $objUsuariosDAO->excluir($id_usuario);
	if($retorno){
		header("location:listar.php?deleteOk");
	}
	else{
		header("location:listar.php?deleteNok");
	}
?>