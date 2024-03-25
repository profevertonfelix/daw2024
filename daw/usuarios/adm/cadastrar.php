<?php
	session_start();
	if(!isset($_SESSION['logadoAdm'])){
		header("location=../login.php");
	}
	
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<h1>Cadastro de Adm</h1>
		<form method="POST" action="cadastrar_ok.php">
			Email:<input type="email" name="email"/>
			Senha:<input type="password" name="senha"/>
			Nome:<input type="text" name="nome"/>
			<button type="submit">Enviar</button>
		</form>
		<?php
			if(isset($_GET['error']))
				echo "Não foi possível cadastrar";
		?>
	</body>
</html>