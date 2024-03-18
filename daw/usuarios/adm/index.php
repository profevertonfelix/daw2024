<?php
	session_start();
	if(!isset($_SESSION['logadoAdm'])){
		header("location=../login.php");
	}
	echo "bem vindo, ".$_SESSION['nomeAdm'].".";
	
	//Agora é pra criar o inserir administrador, dentro da pasta ADM
?>