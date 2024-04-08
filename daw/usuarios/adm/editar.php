<?php
	session_start();
	
	include_once "../../class/Usuarios.class.php";
	include_once "../../class/UsuariosDAO.class.php";
	
	if(!isset($_SESSION['logadoAdm'])){
		header("location=../login.php");
	}
	
	$id_usuario = $_GET['id'];
	
	$objUsuariosDAO = new UsuariosDAO();
	$retorno = $objUsuariosDAO->retornarUnico($id_usuario);
?>
	<form action="editar_ok.php" method="POST">
		Nome:
		<input type="text" name="nome" value="<?=$retorno['nome'];?>"/>
		<br />
		Email:
		<input type="email" name="email" value="<?=$retorno['email'];?>"/>
		<br />
		ADM:
		<input type="radio" name="adm" value="1" checked/>Sim
		<input type="radio" name="adm" value="0"/>Não
		<br />
		<input type="hidden" name="id_usuarios" value="<?=$retorno['id_usuarios'];?>"/>

		<button type="submit">Enviar</button>
	</form>