<?php
	session_start();
	
	include_once "../class/Produtos.class.php";
	include_once "../class/ProdutosDAO.class.php";
	
	if(!isset($_SESSION['logadoAdm'])){
		header("location=../login.php");
	}
	$objProdutosDAO = new ProdutosDAO();
	$retorno = $objProdutosDAO->listar();
	?>
	<table border>
		<thead>
			<th>Nome</th>
			<th>Categoria</th>
			<th>Foto</th>
			<th colspan="3">Ações</th>
		</thead>
		<tbody>
	<?php
	foreach($retorno as $linha){
		?>
		<tr>
			<td><?=$linha["nome"]?></td>
			<td><?=$linha["categoria"]?></td>
			<td><img width="100" src="../img/<?=$linha["foto"]?>" /></td>
			<td>
				<a href="vermais.php?id=<?=$linha['idprodutos'];?>">
					Ver mais
				</a>
			</td>
			<td>
				<a href="editar.php?id=<?=$linha['idprodutos'];?>">
					Editar
				</a>
			</td>
			<td>
				<a href="excluir.php?id=<?=$linha['idprodutos'];?>">
					Excluir
				</a>
			</td>

		</tr>
		<?php
	}
	if(isset($_GET['InserirOk']))
		echo "Inserido com sucesso";
	if(isset($_GET['editarOk']))
		echo "Editado com sucesso";
	if(isset($_GET['editarNok']))
		echo "Editado sem sucesso";
	if(isset($_GET['deleteOk']))
		echo "Deletado com sucesso";
	if(isset($_GET['deleteNok']))
		echo "Deletado sem sucesso";
?>