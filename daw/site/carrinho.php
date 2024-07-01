<?php
	session_start();
	print_r($_SESSION);
	if(!isset($_SESSION['logadoAdm']))
	{
		header('location:../usuarios/login.php');
	}
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
		<tbody>
		
		<form action='carrinho_ok.php' method='post'>
		";
		foreach($_SESSION['carrinho'] as $idProduto){
			$retorno = $objProdutosDAO->retornarUnico($idProduto);
			echo "
			
			<tr>
				<td>".$retorno['nome']."</td>
				<td>".$retorno['categoria']."</td>
				<td>Quantidade:<input value='1' type='number' name='quantidade$idProduto'/></td>
				<td><img src='../img/".$retorno['foto']."'/></td>
			</tr>
			
			";
		}
		echo "
		</tbody>
		</table>
		<h2>Pagamento e forma de entrega</h2>
		Forma de pagamento:<input type='text' name='pagamento'/><br />
		Endereço de entrega:<input type='text' name='entrega'/><br />
		<button type='submit'>finalizar carrinho</button>
		</form>";
	}
	
?>