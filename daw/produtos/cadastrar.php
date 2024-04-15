<?php
	session_start();
	if(!isset($_SESSION['logadoAdm'])){
		header("location=../login.php");
	}
		
	include_once "../class/Categorias.class.php";
	include_once "../class/CategoriasDAO.class.php";
	$objCategoriasDAO = new CategoriasDAO();
	$retorno = $objCategoriasDAO->listar();
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<h1>Cadastro Produto</h1>
		<form method="POST" action="cadastrar_ok.php" enctype="multipart/form-data">
			Nome:<input type="text" name="nome"/>
			Preço:<input type="text" name="preco"/>
			Categoria:
			<select name="idcategoria">
				<option value="">-- Selecione --</option>
				<?php
					foreach($retorno as $linha){
						?>
						<option value="<?=$linha['idcategorias'];?>">
							<?=$linha['nome'];?>
						</option>
						<?php
					}
				?>
			</select>
			Foto:<input type="file" name="foto"/>
			
			<button type="submit">Enviar</button>
		</form>
		<?php
			if(isset($_GET['error']))
				echo "Não foi possível cadastrar";
		?>
	</body>
</html>