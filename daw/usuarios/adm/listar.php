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
			<p>
				<a href="editar.php?id=<?=$linha['id_usuarios'];?>">
					Editar
				</a>
			</p>
			<p>
				<a href="excluir.php?id=<?=$linha['id_usuarios'];?>">
					Excluir
				</a>
			</p>
		</div>
		<?php
	}
	if(isset($_GET['editarOk']))
		echo "Editado com sucesso";
	if(isset($_GET['editarNok']))
		echo "Editado sem sucesso";
	if(isset($_GET['deleteOk']))
		echo "Deletado com sucesso";
	if(isset($_GET['deleteNok']))
		echo "Deletado sem sucesso";
?>