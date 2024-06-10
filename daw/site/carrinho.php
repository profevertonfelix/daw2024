<?php
	session_start();
	if(!isset($_SESSION['carrinho'])){
		echo "<h1>Seu carrinho ainda está vazio!</h1>";
	}
	else{
		include_once "../class/Produtos.class.php";
		include_once "../class/ProdutosDAO.class.php";
		$objProdutosDAO = new ProdutosDAO();
		echo "
		<table border>
		<thead>
			<th>Nome</th>
			<th>Categoria</th>
			<th>Foto</th>
			<th colspan='3'>Ações</th>
		</thead>
		<tbody>";
		foreach($_SESSION['carrinho'] as $idProduto){
			$retorno = $objProdutosDAO->retornarUnico($idProduto);
			echo "<tr>
				<td>".$retorno['nome']."</td>
				<td>".$retorno['categoria']."</td>
				<td><img src='../img/".$retorno['foto']."'/></td>
			</tr>";
		}
	}
	
?>