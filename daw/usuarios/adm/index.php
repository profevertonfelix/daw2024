<?php
	session_start();
	if(!isset($_SESSION['logadoAdm'])){
		header("location=../login.php");
	}
	echo "bem vindo, ".$_SESSION['nomeAdm'].".";
	
	if(isset($_GET['admOk']))
		echo "Novo administrador cadastrado com sucesso!";

?>
<h2>Menu</h2>
<a href="cadastrar.php">Cadastrar Adm</a><br />
<a href="listar.php">Listar Adm</a><br />