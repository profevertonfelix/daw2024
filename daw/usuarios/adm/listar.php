<?php
	session_start();
	
	include_once "../../class/Usuarios.class.php";
	include_once "../../class/UsuariosDAO.class.php";
	
	if(!isset($_SESSION['logadoAdm'])){
		header("location=../login.php");
	}
	$objUsuariosDAO = new UsuariosDAO();
	$retorno = $objUsuariosDAO->listar();
	
	foreach($retorno as $linha){
		?>
		<div style="border:1px solid; margin-bottom:2px;">
			<h3><?=$linha["nome"];?></h3>
			<p><?=$linha["email"];?></p>
		</div>
		<?php
	}
?>