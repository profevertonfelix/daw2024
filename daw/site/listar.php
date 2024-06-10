<?php
	session_start();
	if(isset($_GET['carrinho'])){
		if(!isset($_SESSION['carrinho']))
			$_SESSION["carrinho"] = [];
		
		if(!in_array($_GET["id"], $_SESSION['carrinho'])){
			array_push($_SESSION['carrinho'], $_GET['id']);
			echo "<h2>Produto adicionado ao carrinho!</h2>";
		}
		else
			echo "<h2>Produto já adicionado ao carrinho anteriormente</h2>";		
		echo "<pre>";
		print_r($_SESSION['carrinho']);
	}
	//session_destroy();
	include_once "../class/Produtos.class.php";
	include_once "../class/ProdutosDAO.class.php";
	$objProdutosDAO = new ProdutosDAO();
	$retorno = $objProdutosDAO->listar();
	?>
	<a href="carrinho.php">Carrinho de compras</a>
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
				<a href="?id=<?=$linha['idprodutos'];?>&carrinho">
					Comprar
				</a>
			</td>

		</tr>
		<?php
	}
	

?>