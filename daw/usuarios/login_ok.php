<?php
	session_start();
	include_once "../class/Usuarios.class.php";
	include_once "../class/UsuariosDAO.class.php";
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	
	$objUsuarios = new Usuarios();
	$objUsuarios->setEmail($email);
	$objUsuarios->setSenha($senha);
	
	$objUsuariosDAO = new UsuariosDAO();
	$retorno = $objUsuariosDAO->login($objUsuarios);
	
	if($retorno==0){
		header("location:login.php?email");
	}
	else if($retorno==1){
		header("location:login.php?senha");
	}
	else{
		echo "Bem vindo, sr Cadastrado";
		$_SESSION["logadoAdm"]=true;
		$_SESSION["idAdm"] = $retorno['id'];
		$_SESSION["nomeAdm"] = $retorno['nome'];
		header("location:adm/index.php");
		
	}
?>