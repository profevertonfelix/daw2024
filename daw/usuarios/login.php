<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form method="POST" action="login_ok.php">
			Email:<input type="email" name="email"/>
			Senha:<input type="password" name="senha"/>
			<button type="submit">Enviar</button>
		</form>
		<?php
			if(isset($_GET['senha']))
				echo "Senha incorreta";
			
			if(isset($_GET['email']))
				echo "Email não cadastrado";
			
		?>
	</body>
</html>